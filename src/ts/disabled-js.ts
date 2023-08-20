/**
 * Use this file to hide/show certain elements ect instead of using css so if the
 * user has js disabled they will still be able to use the site
 */

const get_em_to_px_rate = () => document.querySelector('#em')?.clientWidth || 16;
