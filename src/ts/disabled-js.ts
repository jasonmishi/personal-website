/**
 * Use this file to hide/show certain elements ect instead of using css so if the
 * user has js disabled they will still be able to use the site
 */

document.querySelectorAll('.js-required').forEach((el) => el.classList.remove('js-required'));

const em_reference_element = document.querySelector('#em');
// TODO: Use matchMedia instead of this
const get_em_to_px_rate = () => em_reference_element?.clientWidth || 16;

const breakpoints_em = {
  sm: 40,
  md: 48,
  lg: 64,
  xl: 80,
}
const breakpoints: {[key: string]: number} = {};

const generate_breakpoints = () => {
  const em_to_px_rate = get_em_to_px_rate();
  for(const [key, value] of Object.entries(breakpoints_em)) {
    breakpoints[key] = value * em_to_px_rate;
  }
}

const generate_breakpoints_observer = new ResizeObserver(generate_breakpoints);

if (em_reference_element){
  generate_breakpoints();
  generate_breakpoints_observer.observe(em_reference_element);
}
else
  console.error('em_reference_element not found');

const get_breakpoint = (breakpoint: string) => {
  return breakpoints[breakpoint];
}


const get_viewport_width = () => window.innerWidth;

const choose_breakpoint = () => {
  if (get_viewport_width() < get_breakpoint('md')) {
    onLessThanmdBreakpoint();
  } else {
    onGreaterThanmdBreakpoint()
  }
}
choose_breakpoint();
window.addEventListener('resize', choose_breakpoint);

// TODO: have an array to hide/show elements on shirnk/grow
function onLessThanmdBreakpoint() {
  document.querySelector('.navbar nav ul')?.classList.add('hidden');
}

function onGreaterThanmdBreakpoint() {
  document.querySelector('.navbar nav ul')?.classList.remove('hidden');
}