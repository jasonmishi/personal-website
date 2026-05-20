---
layout: post
title: How to deploy Jekyll + al-folio to Cloudflare Pages with GitHub Actions
date: 2026-01-25 15:09:00
description: How to have a deployment pipeline for jekyl al-folio with GitHub Actions and Cloudflare Pages
tags: DevOps code
categories: Dev DevOps
featured: true
---

I wanted to host my `al-folio` site on Cloudflare Pages, but most guides I found were based on an older GitHub Action that has since been deprecated. The setup that works for this repo is slightly different: GitHub Actions does the build, Cloudflare Pages only hosts the output, and Cloudflare's automatic Git-based deployment is paused.

## Why Cloudflare pages over GitHub pages

1. I liked having branch specific previews, you can see what changes a PR would make though a web url
2. The domain support is easier since my DNS is already Cloudflare
3. Easier integration with cloudflares secuirty features

## Cloudflare setup

This workflow does **not** rely on Cloudflare Pages to build the site from your repository. Instead, GitHub Actions builds the Jekyll site and uploads the generated `_site` directory to Cloudflare Pages.

The Cloudflare side is:

1. Create a Cloudflare Pages project, import it from GitHub.
2. Pause automatic deployments in Cloudflare Pages, since GitHub Actions is the build system here. (Settings -> Branch Control)
3. Create an API token that can deploy to Pages.
4. Copy your Cloudflare account ID.
5. Add these as GitHub repository secrets:

```text
CLOUDFLARE_API_TOKEN
CLOUDFLARE_ACCOUNT_ID
```

The project name in Cloudflare must match the name used in the workflow.

## GitHub Actions workflow

The deployment workflow can be seen in [.github/workflows/deploy.yml](https://github.com/jasonmishi/website/blob/02941cdb5291e3823f264cd9addb9962d8bab16c/.github/workflows/deploy.yml). It does four things:

- checks out the repository
- installs the Ruby and Python dependencies needed for `al-folio`
- builds the site with Jekyll into `_site`
- deploys `_site` to Cloudflare Pages using Wrangler

The key step is:

```yaml
- name: Deploy
  uses: cloudflare/wrangler-action@v3
  with:
    apiToken: ${{ secrets.CLOUDFLARE_API_TOKEN }}
    accountId: ${{ secrets.CLOUDFLARE_ACCOUNT_ID }}
    command: pages deploy _site --project-name=jasonmishi --branch=${{ env.BRANCH_NAME }} --commit-hash=${{ env.COMMIT_SHA }}
```

The important part is the command:

- `_site` is the built Jekyll output
- `--project-name=jasonmishi` must match your Cloudflare Pages project
- `--branch` makes branch deployments traceable
- `--commit-hash` makes the deployment map cleanly back to GitHub

## Conclusion

Now when you trigger the workflow your al-folio site would automatically be deployed through CloudFlare Pages.
In summary: pause Cloudflare's automatic deployment, let GitHub Actions build the site, and have Wrangler push the final `_site` artifact to Cloudflare Pages.
