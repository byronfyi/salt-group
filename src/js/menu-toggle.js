const menuToggle = () => {
    const btn = document.querySelector('[data-toggle]');
    const targetId = btn.getAttribute('aria-controls');
    const target = document.querySelector(`#${targetId}`);

    function toggleCollapse(e) {
        (this.getAttribute('aria-expanded') === 'true')
            ? this.setAttribute('aria-expanded', 'false')
            : this.setAttribute('aria-expanded', 'true')

        this.classList.toggle('active');

        target.classList.toggle('show');
        document.body.classList.toggle('menu-active');
    }

    btn.addEventListener('click', toggleCollapse);
}

export default menuToggle;
