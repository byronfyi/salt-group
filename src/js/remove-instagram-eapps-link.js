const removeInstagramEaapsLink = () => {
    setTimeout(() => {
        const instagram = document.querySelector('.eapps-link');
        instagram.style.display = 'none'
    }, 2000);
};

export default removeInstagramEaapsLink;
