/**
 * Use this file to hide/show certain elements ect instead of using css so if the
 * user has js disabled they will still be able to use the site
 */

document.querySelectorAll('.js-required').forEach((el) => el.classList.remove('js-required'));

const breakpoints = {
  sm: "40em",
  md: "48em",
  lg: "64em",
  xl: "80em",
}

const get_viewport_width = () => window.innerWidth;

const choose_breakpoint = () => {
  if (!window.matchMedia(`screen and (min-width: ${breakpoints.md})`).matches) {
    onLessThanmdBreakpoint();
  } else {
    onGreaterThanmdBreakpoint()
  }
}
choose_breakpoint();
window.addEventListener('resize', choose_breakpoint);

// TODO: have an array to hide/show elements on shirnk/grow
function onLessThanmdBreakpoint() {
  document.querySelector('.navbar nav ul')?.classList.add('hidden', 'mobile');
}

function onGreaterThanmdBreakpoint() {
  document.querySelector('.navbar nav ul')?.classList.remove('hidden', 'mobile');
}

