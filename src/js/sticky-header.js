const stickyHeader = () => {
    let scrollpos = window.scrollY;
    const header = document.querySelector(".header");
    const offsetHeight = 180;

    const addClassOnScroll = (className) => header.classList.add(className);
    const removeClassOnScroll = (className) => header.classList.remove(className);

    function handleScroll() {
        scrollpos = window.scrollY;

        if (scrollpos >= offsetHeight) {
            addClassOnScroll('header--light');
        } else {
            removeClassOnScroll('header--light');
        }
    }
    
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('load', handleScroll);
}

export default stickyHeader;
