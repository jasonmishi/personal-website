const asciiArt = '   __  ______  ______  ______  __   __  __    __  __  ______  __  __  __    \r\n  \/\\ \\\/\\  __ \\\/\\  ___\\\/\\  __ \\\/\\ \"-.\\ \\\/\\ \"-.\/  \\\/\\ \\\/\\  ___\\\/\\ \\_\\ \\\/\\ \\   \r\n _\\_\\ \\ \\  __ \\ \\___  \\ \\ \\\/\\ \\ \\ \\-.  \\ \\ \\-.\/\\ \\ \\ \\ \\___  \\ \\  __ \\ \\ \\  \r\n\/\\_____\\ \\_\\ \\_\\\/\\_____\\ \\_____\\ \\_\\\\\"\\_\\ \\_\\ \\ \\_\\ \\_\\\/\\_____\\ \\_\\ \\_\\ \\_\\ \r\n\\\/_____\/\\\/_\/\\\/_\/\\\/_____\/\\\/_____\/\\\/_\/ \\\/_\/\\\/_\/  \\\/_\/\\\/_\/\\\/_____\/\\\/_\/\\\/_\/\\\/_\/ ';
console.log(asciiArt);

// add margin to top of page based on .navbar height
const resizeObserver = new ResizeObserver(entries => {
    for (let entry of entries) {
        const navbarHeight = entry.contentRect.height;
        document.body.style.marginTop = `${navbarHeight}px`;
    }
});

const navbar = document.querySelector('.navbar');
if (navbar) resizeObserver.observe(navbar);