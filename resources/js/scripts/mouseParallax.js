export default (selectorTarget = ".js-parallax-target") => {
    const target = document.querySelector(selectorTarget);

    window.addEventListener("mousemove", (e) => {
        const coordX = ((e.clientX / window.innerWidth) * 30) - 15;
        const coordY = ((e.clientY / window.innerHeight) * 10) - 5;

        target.style.transform = `translate(${coordX}px, ${coordY}px)`;
    });
};