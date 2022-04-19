const CookieService = {
    setCookie(name, value, days) {
        let expires = '';

        if (days) {
            const date = new Date();
            // Expire 30 days
            // date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));

            // Expire 1 hour
            date.setTime(date.getTime() + 1 * 3600 * 1000);
            expires = '; expires=' + date.toUTCString();
        }

        document.cookie = name + '=' + (value || '')  + expires + ';';
    },

    getCookie(name) {
        const cookies = document.cookie.split(';');

        for (const cookie of cookies) {
            if (cookie.indexOf(name + '=') > -1) {
                return cookie.split('=')[1];
            }
        }

        return null;
    }
};