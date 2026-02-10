import 'mmenu-js/dist/mmenu.css';
import Mmenu from 'mmenu-js';

export const initMmenu = () => {
    const menuElement = document.querySelector("#menu");

    if (!menuElement) {
        return;
    }

    new Mmenu(menuElement, {
        navbar: {
            add: true,
            title: "Billie Eilish",
        },
        "offCanvas": {
            "position": "right",
        },
        "theme": "black",
        "navbars": [
            {
                "position": "bottom",
                "content": [
                    "<i class=\"bi bi-facebook text-white fs-1\"></i>",
                    "<i class=\"bi bi-instagram text-white fs-1\"></i>",
                    "<i class=\"bi bi-tiktok text-white fs-1\"></i>",
                    "<i class=\"bi bi-spotify text-white fs-1\"></i>"
                ]
            }
        ]
    });
}
