class ElementNotFoundError {
  constructor(selector: string) {
    return new Error(`element not found: ${selector}`);
  }
}

export { ElementNotFoundError };