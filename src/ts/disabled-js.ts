/**
 * Use this file to hide/show certain elements ect instead of using css so if the
 * user has js disabled they will still be able to use the site
 */

document.querySelectorAll('.js-required').forEach((el) => el.classList.remove('js-required'));

const em_reference_element = document.querySelector('#em');
const get_em_to_px_rate = () => em_reference_element?.clientWidth || 16;

em_reference_element

const break_points_em = {
  sm: 40,
  md: 48,
  lg: 64,
  xl: 80,
}
const break_points: {[key: string]: number} = {};

const set_break_points = new ResizeObserver(() => {
  const em_to_px_rate = get_em_to_px_rate();
  for(const [key, value] of Object.entries(break_points_em)) {
    break_points[key] = value * em_to_px_rate;
  }
});

const get_break_point = (break_point: string) => {
  return break_points[break_point];
}

if (em_reference_element)
  set_break_points.observe(em_reference_element);
else
  console.error('em_reference_element not found');


const get_viewport_width = () => window.innerWidth;

const choose_break_point = () => {
  if (get_viewport_width() < get_break_point('lg')) {
    onLessThanlgBreakPoint();
  }
}
choose_break_point();
window.addEventListener('resize', choose_break_point);

function onLessThanlgBreakPoint() {
  console.log('lg');
}