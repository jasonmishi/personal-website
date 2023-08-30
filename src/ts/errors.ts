class ElementNotFound {
  constructor(selector: string) {
    return new Error(`element not found: ${selector}`);
  }
}

export { ElementNotFound };