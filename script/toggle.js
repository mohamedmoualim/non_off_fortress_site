function toggleDropdown(link) {
    var li = link.parentElement;
    li.classList.toggle("active");

    if (li.classList.contains("active")) {
        document.addEventListener("click", closeDropdown);
        document.addEventListener("touchstart", closeDropdown);
    } 
    else {
        document.removeEventListener("click", closeDropdown);
        document.removeEventListener("touchstart", closeDropdown);
    }

    function closeDropdown(event) {
        if (!event.target.closest(".services")) {
            li.classList.remove("active");
            document.removeEventListener("click", closeDropdown);
            document.removeEventListener("touchstart", closeDropdown);
        }
    }
}
