let popup = document.querySelector(".popup");

/**
 *The 'open()' function adds  'active' class to
 *'Popup' to open it.
 */
const openPopup = () => popup.classList.add("active");

/**
 * The 'close()' function removes 'active' class to
 * 'Popup' to close it.
 */
const closePopup = () => popup.classList.remove("active");
