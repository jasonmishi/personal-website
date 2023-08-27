"use strict";

// eslint-disable-next-line no-useless-escape
const asciiArt = '   __  ______  ______  ______  __   __  __    __  __  ______  __  __  __    \r\n  \/\\ \\\/\\  __ \\\/\\  ___\\\/\\  __ \\\/\\ \"-.\\ \\\/\\ \"-.\/  \\\/\\ \\\/\\  ___\\\/\\ \\_\\ \\\/\\ \\   \r\n _\\_\\ \\ \\  __ \\ \\___  \\ \\ \\\/\\ \\ \\ \\-.  \\ \\ \\-.\/\\ \\ \\ \\ \\___  \\ \\  __ \\ \\ \\  \r\n\/\\_____\\ \\_\\ \\_\\\/\\_____\\ \\_____\\ \\_\\\\\"\\_\\ \\_\\ \\ \\_\\ \\_\\\/\\_____\\ \\_\\ \\_\\ \\_\\ \r\n\\\/_____\/\\\/_\/\\\/_\/\\\/_____\/\\\/_____\/\\\/_\/ \\\/_\/\\\/_\/  \\\/_\/\\\/_\/\\\/_____\/\\\/_\/\\\/_\/\\\/_\/ ';
console.log(asciiArt);

/*
 * add margin to top of page based on .navbar height
 */
const main = document.querySelector('main');
const resizeObserver = new ResizeObserver(entries => {
  for (const entry of entries) {
    const navbarHeight = entry.contentRect.height;
    if (main) main.style.paddingTop = `${navbarHeight}px`;
  }
});

const navbar = document.querySelector('.navbar');
if (navbar) resizeObserver.observe(navbar);

/* 
 * dark mode toggle
 */
function detectTheme(): 'light' | 'dark' {
  const theme = localStorage.getItem('theme');
  if (theme == 'dark' || theme == 'light') return theme;
  return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
}

function setTheme(theme: 'light' | 'dark') {
  if (theme == 'dark') {
    document.documentElement.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.documentElement.classList.remove('dark');
    localStorage.setItem('theme', 'light');
  }
}

const themeToggle = document.querySelector('.theme-toggle');
if (themeToggle) {
  themeToggle.addEventListener('click', () => {
    const theme = detectTheme();
    setTheme(theme == 'dark' ? 'light' : 'dark');
  });
}

// listen to prefers-color-scheme changes
const colorSchemeQueryList = window.matchMedia('(prefers-color-scheme: dark)');
  
const setColorScheme = (e : MediaQueryListEvent) => {
  if (e.matches) {
    setTheme('dark')
  } else {
    setTheme('light')
  }
}
  
colorSchemeQueryList.addEventListener('change', setColorScheme);

setTheme(detectTheme())


/**
 * menu toggles
 */

const add_backdrop_to_body = () => {
  document.querySelector('body')?.appendChild(document.createElement('div')).classList.add('backdrop', 'hidden');
}
add_backdrop_to_body();

const show_backdrop = () => {
  document.querySelector('.backdrop')?.classList.remove('hidden')
};

const hide_backdrop = () => {
  document.querySelector('.backdrop')?.classList.add('hidden')
}

const open_menu = () => {
  //TODO: check if this is enought for a11y
  document.querySelector('.navbar nav ul')?.classList.remove('hidden');
  document.querySelector('#menu-close')?.classList.remove('hidden');
  show_backdrop();
}

document.querySelector('#menu-open')?.addEventListener('click', open_menu);

const close_menu = () => {
  document.querySelector('.navbar nav ul')?.classList.add('hidden');
  document.querySelector('#menu-close')?.classList.add('hidden');
  hide_backdrop();
}

document.querySelector('#menu-close')?.addEventListener('click', close_menu);