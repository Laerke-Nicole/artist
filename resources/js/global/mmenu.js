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
            "position": "right"
        },
        "theme": "black",
        "navbars": [
            {
                "position": "bottom",
                "content": [
                    "<a class='fa fa-envelope' href='#/'></a>",
                    "<a class='fa fa-twitter' href='#/'></a>",
                    "<a class='fa fa-facebook' href='#/'></a>"
                ]
            }
        ]
    });
}
