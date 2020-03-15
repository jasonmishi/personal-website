document.documentElement.style.setProperty('--bg-col', '#0f0f0f');
document.documentElement.style.setProperty('--accent-col', '#fff');

document.querySelector('.theme-toggle-button').addEventListener('click', () => {
    document.body.classList.toggle('dark');
    if (document.body.className === "dark") {
      document.documentElement.style.setProperty('--bg-col', '#fff');
      document.documentElement.style.setProperty('--accent-col', '#000000');
    } else {
      document.documentElement.style.setProperty('--bg-col', '#0f0f0f');
      document.documentElement.style.setProperty('--accent-col', '#fff');
    }
  })