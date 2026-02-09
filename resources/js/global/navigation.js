export const initNavigation = () => {
    const navigation = document.querySelector(".navbar");

    if (!navigation) {
        return;
    }

    const handleScroll = () => {
        if (window.scrollY > 150) {
            navigation.classList.add("navbar__bg");
        } else {
            navigation.classList.remove("navbar__bg");
        }
    };

    handleScroll();

    window.addEventListener("scroll", handleScroll);
}
