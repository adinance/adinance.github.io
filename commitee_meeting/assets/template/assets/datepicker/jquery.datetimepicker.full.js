/*!
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2016
 * @version 1.3.4
 *
 * Date formatter utility library that allows formatting date/time variables or Date objects using PHP DateTime format.
 * @see http://php.net/manual/en/function.date.php
 *
 * For more JQuery plugins visit http://plugins.krajee.com
 * For more Yii related demos visit http://demos.krajee.com
 */
/*
 jQuery DateTimePicker
 @homepage http://xdsoft.net/jqplugins/datetimepicker/
 @author Chupurnov Valeriy (<chupurnov@gmail.com>)
*/
var DateFormatter;
!(function () {
    var b, p, t, e, v;
    b = function (b, m) {
        return "string" == typeof b && "string" == typeof m && b.toLowerCase() === m.toLowerCase();
    };
    p = function (b, m, d) {
        b = b.toString();
        return b.length < m ? p((d || "0") + b, m) : b;
    };
    t = function (b) {
        var m, d;
        b = b || {};
        for (m = 1; m < arguments.length; m++) if ((d = arguments[m])) for (var e in d) d.hasOwnProperty(e) && ("object" == typeof d[e] ? t(b[e], d[e]) : (b[e] = d[e]));
        return b;
    };
    e = function (b, m) {
        for (var d = 0; d < m.length; d++) if (m[d].toLowerCase() === b.toLowerCase()) return d;
        return -1;
    };
    v = {
        dateSettings: {
            days: "Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),
            daysShort: "Sun Mon Tue Wed Thu Fri Sat".split(" "),
            months: "January February March April May June July August September October November December".split(" "),
            monthsShort: "Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),
            meridiem: ["AM", "PM"],
            ordinal: function (b) {
                var m = b % 10,
                    d = { 1: "st", 2: "nd", 3: "rd" };
                return 1 !== Math.floor((b % 100) / 10) && d[m] ? d[m] : "th";
            },
        },
        separators: /[ \-+\/\.T:@]/g,
        validParts: /[dDjlNSwzWFmMntLoYyaABgGhHisueTIOPZcrU]/g,
        intParts: /[djwNzmnyYhHgGis]/g,
        tzParts: /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g,
        tzClip: /[^-+\dA-Z]/g,
    };
    DateFormatter = function (b) {
        b = t(v, b);
        this.dateSettings = b.dateSettings;
        this.separators = b.separators;
        this.validParts = b.validParts;
        this.intParts = b.intParts;
        this.tzParts = b.tzParts;
        this.tzClip = b.tzClip;
    };
    DateFormatter.prototype = {
        constructor: DateFormatter,
        getMonth: function (b) {
            var m;
            return (m = e(b, this.dateSettings.monthsShort) + 1), 0 === m && (m = e(b, this.dateSettings.months) + 1), m;
        },
        parseDate: function (e, m) {
            var d, n, l, f, c, u, A, w, a;
            w = a = !1;
            var q = this.dateSettings,
                p = (n = null),
                B = null,
                H = null,
                D = 0,
                F = 0,
                t = 0;
            if (!e) return null;
            if (e instanceof Date) return e;
            if ("U" === m) return (l = parseInt(e)), l ? new Date(1e3 * l) : e;
            switch (typeof e) {
                case "number":
                    return new Date(e);
                case "string":
                    break;
                default:
                    return null;
            }
            if (((d = m.match(this.validParts)), !d || 0 === d.length)) throw Error("Invalid date format definition.");
            n = e.replace(this.separators, "\x00").split("\x00");
            for (l = 0; l < n.length; l++)
                switch (((f = n[l]), (c = parseInt(f)), d[l])) {
                    case "y":
                    case "Y":
                        if (!c) return null;
                        a = f.length;
                        p = 2 === a ? parseInt((70 > c ? "20" : "19") + f) : c;
                        a = !0;
                        break;
                    case "m":
                    case "n":
                    case "M":
                    case "F":
                        if (isNaN(c)) {
                            if (((u = this.getMonth(f)), !(0 < u))) return null;
                            B = u;
                        } else {
                            if (!(1 <= c && 12 >= c)) return null;
                            B = c;
                        }
                        a = !0;
                        break;
                    case "d":
                    case "j":
                        if (!(1 <= c && 31 >= c)) return null;
                        H = c;
                        a = !0;
                        break;
                    case "g":
                    case "h":
                        if (((A = -1 < d.indexOf("a") ? d.indexOf("a") : -1 < d.indexOf("A") ? d.indexOf("A") : -1), (w = n[A]), -1 < A))
                            (w = b(w, q.meridiem[0]) ? 0 : b(w, q.meridiem[1]) ? 12 : -1), 1 <= c && 12 >= c && -1 < w ? (D = c + w - 1) : 0 <= c && 23 >= c && (D = c);
                        else {
                            if (!(0 <= c && 23 >= c)) return null;
                            D = c;
                        }
                        w = !0;
                        break;
                    case "G":
                    case "H":
                        if (!(0 <= c && 23 >= c)) return null;
                        D = c;
                        w = !0;
                        break;
                    case "i":
                        if (!(0 <= c && 59 >= c)) return null;
                        F = c;
                        w = !0;
                        break;
                    case "s":
                        if (!(0 <= c && 59 >= c)) return null;
                        t = c;
                        w = !0;
                }
            if (!0 === a && p && B && H) n = new Date(p, B - 1, H, D, F, t, 0);
            else {
                if (!0 !== w) return null;
                n = new Date(0, 0, 0, D, F, t, 0);
            }
            return n;
        },
        guessDate: function (b, e) {
            if ("string" != typeof b) return b;
            var d,
                n,
                l,
                f,
                c,
                u,
                A = b.replace(this.separators, "\x00").split("\x00"),
                w = e.match(this.validParts),
                a = new Date();
            f = 0;
            if (!/^[djmn]/g.test(w[0])) return b;
            for (l = 0; l < A.length; l++) {
                if (((f = 2), (c = A[l]), (u = parseInt(c.substr(0, 2))), isNaN(u))) return null;
                switch (l) {
                    case 0:
                        "m" === w[0] || "n" === w[0] ? a.setMonth(u - 1) : a.setDate(u);
                        break;
                    case 1:
                        "m" === w[0] || "n" === w[0] ? a.setDate(u) : a.setMonth(u - 1);
                        break;
                    case 2:
                        if (((n = a.getFullYear()), (d = c.length), (f = 4 > d ? d : 4), (n = parseInt(4 > d ? n.toString().substr(0, 4 - d) + c : c.substr(0, 4))), !n)) return null;
                        a.setFullYear(n);
                        break;
                    case 3:
                        a.setHours(u);
                        break;
                    case 4:
                        a.setMinutes(u);
                        break;
                    case 5:
                        a.setSeconds(u);
                }
                f = c.substr(f);
                0 < f.length && A.splice(l + 1, 0, f);
            }
            return a;
        },
        parseFormat: function (b, e) {
            var d,
                n = this,
                l = n.dateSettings,
                f = /\\?(.?)/gi,
                c = function (b, c) {
                    return d[b] ? d[b]() : c;
                };
            return (
                (d = {
                    d: function () {
                        return p(d.j(), 2);
                    },
                    D: function () {
                        return l.daysShort[d.w()];
                    },
                    j: function () {
                        return e.getDate();
                    },
                    l: function () {
                        return l.days[d.w()];
                    },
                    N: function () {
                        return d.w() || 7;
                    },
                    w: function () {
                        return e.getDay();
                    },
                    z: function () {
                        var b = new Date(d.Y(), d.n() - 1, d.j()),
                            c = new Date(d.Y(), 0, 1);
                        return Math.round((b - c) / 864e5);
                    },
                    W: function () {
                        var b = new Date(d.Y(), d.n() - 1, d.j() - d.N() + 3),
                            c = new Date(b.getFullYear(), 0, 4);
                        return p(1 + Math.round((b - c) / 864e5 / 7), 2);
                    },
                    F: function () {
                        return l.months[e.getMonth()];
                    },
                    m: function () {
                        return p(d.n(), 2);
                    },
                    M: function () {
                        return l.monthsShort[e.getMonth()];
                    },
                    n: function () {
                        return e.getMonth() + 1;
                    },
                    t: function () {
                        return new Date(d.Y(), d.n(), 0).getDate();
                    },
                    L: function () {
                        var b = d.Y();
                        return (0 === b % 4 && 0 !== b % 100) || 0 === b % 400 ? 1 : 0;
                    },
                    o: function () {
                        var b = d.n(),
                            c = d.W();
                        return d.Y() + (12 === b && 9 > c ? 1 : 1 === b && 9 < c ? -1 : 0);
                    },
                    Y: function () {
                        return e.getFullYear();
                    },
                    y: function () {
                        return d.Y().toString().slice(-2);
                    },
                    a: function () {
                        return d.A().toLowerCase();
                    },
                    A: function () {
                        var b = 12 > d.G() ? 0 : 1;
                        return l.meridiem[b];
                    },
                    B: function () {
                        var b = 3600 * e.getUTCHours(),
                            c = 60 * e.getUTCMinutes(),
                            d = e.getUTCSeconds();
                        return p(Math.floor((b + c + d + 3600) / 86.4) % 1e3, 3);
                    },
                    g: function () {
                        return d.G() % 12 || 12;
                    },
                    G: function () {
                        return e.getHours();
                    },
                    h: function () {
                        return p(d.g(), 2);
                    },
                    H: function () {
                        return p(d.G(), 2);
                    },
                    i: function () {
                        return p(e.getMinutes(), 2);
                    },
                    s: function () {
                        return p(e.getSeconds(), 2);
                    },
                    u: function () {
                        return p(1e3 * e.getMilliseconds(), 6);
                    },
                    e: function () {
                        return /\((.*)\)/.exec(String(e))[1] || "Coordinated Universal Time";
                    },
                    I: function () {
                        var b = new Date(d.Y(), 0),
                            c = Date.UTC(d.Y(), 0),
                            e = new Date(d.Y(), 6),
                            a = Date.UTC(d.Y(), 6);
                        return b - c !== e - a ? 1 : 0;
                    },
                    O: function () {
                        var b = e.getTimezoneOffset(),
                            c = Math.abs(b);
                        return (0 < b ? "-" : "+") + p(100 * Math.floor(c / 60) + (c % 60), 4);
                    },
                    P: function () {
                        var b = d.O();
                        return b.substr(0, 3) + ":" + b.substr(3, 2);
                    },
                    T: function () {
                        return (String(e).match(n.tzParts) || [""]).pop().replace(n.tzClip, "") || "UTC";
                    },
                    Z: function () {
                        return 60 * -e.getTimezoneOffset();
                    },
                    c: function () {
                        return "Y-m-d\\TH:i:sP".replace(f, c);
                    },
                    r: function () {
                        return "D, d M Y H:i:s O".replace(f, c);
                    },
                    U: function () {
                        return e.getTime() / 1e3 || 0;
                    },
                }),
                c(b, b)
            );
        },
        formatDate: function (b, e) {
            var d,
                n,
                l,
                f,
                c,
                u = "";
            if ("string" == typeof b && ((b = this.parseDate(b, e)), !b)) return null;
            if (b instanceof Date) {
                l = e.length;
                for (d = 0; l > d; d++)
                    (c = e.charAt(d)),
                        "S" !== c &&
                            "\\" !== c &&
                            (0 < d && "\\" === e.charAt(d - 1)
                                ? (u += c)
                                : ((f = this.parseFormat(c, b)), d !== l - 1 && this.intParts.test(c) && "S" === e.charAt(d + 1) && ((n = parseInt(f) || 0), (f += this.dateSettings.ordinal(n))), (u += f)));
                return u;
            }
            return "";
        },
    };
})();
var datetimepickerFactory = function (b) {
    function p(b, d, e) {
        this.date = b;
        this.desc = d;
        this.style = e;
    }
    var t = {
            i18n: {
                ar: {
                    months: "\u0643\u0627\u0646\u0648\u0646 \u0627\u0644\u062b\u0627\u0646\u064a;\u0634\u0628\u0627\u0637;\u0622\u0630\u0627\u0631;\u0646\u064a\u0633\u0627\u0646;\u0645\u0627\u064a\u0648;\u062d\u0632\u064a\u0631\u0627\u0646;\u062a\u0645\u0648\u0632;\u0622\u0628;\u0623\u064a\u0644\u0648\u0644;\u062a\u0634\u0631\u064a\u0646 \u0627\u0644\u0623\u0648\u0644;\u062a\u0634\u0631\u064a\u0646 \u0627\u0644\u062b\u0627\u0646\u064a;\u0643\u0627\u0646\u0648\u0646 \u0627\u0644\u0623\u0648\u0644".split(
                        ";"
                    ),
                    dayOfWeekShort: "\u0646\u062b\u0639\u062e\u062c\u0633\u062d".split(""),
                    dayOfWeek: "\u0627\u0644\u0623\u062d\u062f \u0627\u0644\u0627\u062b\u0646\u064a\u0646 \u0627\u0644\u062b\u0644\u0627\u062b\u0627\u0621 \u0627\u0644\u0623\u0631\u0628\u0639\u0627\u0621 \u0627\u0644\u062e\u0645\u064a\u0633 \u0627\u0644\u062c\u0645\u0639\u0629 \u0627\u0644\u0633\u0628\u062a \u0627\u0644\u0623\u062d\u062f".split(
                        " "
                    ),
                },
                ro: {
                    months: "Ianuarie Februarie Martie Aprilie Mai Iunie Iulie August Septembrie Octombrie Noiembrie Decembrie".split(" "),
                    dayOfWeekShort: "Du Lu Ma Mi Jo Vi S\u00e2".split(" "),
                    dayOfWeek: "Duminic\u0103 Luni Mar\u0163i Miercuri Joi Vineri S\u00e2mb\u0103t\u0103".split(" "),
                },
                id: {
                    months: "Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember".split(" "),
                    dayOfWeekShort: "Min Sen Sel Rab Kam Jum Sab".split(" "),
                    dayOfWeek: "Minggu Senin Selasa Rabu Kamis Jumat Sabtu".split(" "),
                },
                is: {
                    months: "Jan\u00faar Febr\u00faar Mars Apr\u00edl Ma\u00ed J\u00fan\u00ed J\u00fal\u00ed \u00c1g\u00fast September Okt\u00f3ber N\u00f3vember Desember".split(" "),
                    dayOfWeekShort: "Sun M\u00e1n \u00deri\u00f0 Mi\u00f0 Fim F\u00f6s Lau".split(" "),
                    dayOfWeek: "Sunnudagur M\u00e1nudagur \u00deri\u00f0judagur Mi\u00f0vikudagur Fimmtudagur F\u00f6studagur Laugardagur".split(" "),
                },
                bg: {
                    months: "\u042f\u043d\u0443\u0430\u0440\u0438 \u0424\u0435\u0432\u0440\u0443\u0430\u0440\u0438 \u041c\u0430\u0440\u0442 \u0410\u043f\u0440\u0438\u043b \u041c\u0430\u0439 \u042e\u043d\u0438 \u042e\u043b\u0438 \u0410\u0432\u0433\u0443\u0441\u0442 \u0421\u0435\u043f\u0442\u0435\u043c\u0432\u0440\u0438 \u041e\u043a\u0442\u043e\u043c\u0432\u0440\u0438 \u041d\u043e\u0435\u043c\u0432\u0440\u0438 \u0414\u0435\u043a\u0435\u043c\u0432\u0440\u0438".split(
                        " "
                    ),
                    dayOfWeekShort: "\u041d\u0434 \u041f\u043d \u0412\u0442 \u0421\u0440 \u0427\u0442 \u041f\u0442 \u0421\u0431".split(" "),
                    dayOfWeek: "\u041d\u0435\u0434\u0435\u043b\u044f \u041f\u043e\u043d\u0435\u0434\u0435\u043b\u043d\u0438\u043a \u0412\u0442\u043e\u0440\u043d\u0438\u043a \u0421\u0440\u044f\u0434\u0430 \u0427\u0435\u0442\u0432\u044a\u0440\u0442\u044a\u043a \u041f\u0435\u0442\u044a\u043a \u0421\u044a\u0431\u043e\u0442\u0430".split(
                        " "
                    ),
                },
                fa: {
                    months: "\u0641\u0631\u0648\u0631\u062f\u06cc\u0646 \u0627\u0631\u062f\u06cc\u0628\u0647\u0634\u062a \u062e\u0631\u062f\u0627\u062f \u062a\u06cc\u0631 \u0645\u0631\u062f\u0627\u062f \u0634\u0647\u0631\u06cc\u0648\u0631 \u0645\u0647\u0631 \u0622\u0628\u0627\u0646 \u0622\u0630\u0631 \u062f\u06cc \u0628\u0647\u0645\u0646 \u0627\u0633\u0641\u0646\u062f".split(
                        " "
                    ),
                    dayOfWeekShort: "\u06cc\u06a9\u0634\u0646\u0628\u0647;\u062f\u0648\u0634\u0646\u0628\u0647;\u0633\u0647 \u0634\u0646\u0628\u0647;\u0686\u0647\u0627\u0631\u0634\u0646\u0628\u0647;\u067e\u0646\u062c\u0634\u0646\u0628\u0647;\u062c\u0645\u0639\u0647;\u0634\u0646\u0628\u0647".split(
                        ";"
                    ),
                    dayOfWeek: "\u06cc\u06a9\u200c\u0634\u0646\u0628\u0647 \u062f\u0648\u0634\u0646\u0628\u0647 \u0633\u0647\u200c\u0634\u0646\u0628\u0647 \u0686\u0647\u0627\u0631\u0634\u0646\u0628\u0647 \u067e\u0646\u062c\u200c\u0634\u0646\u0628\u0647 \u062c\u0645\u0639\u0647 \u0634\u0646\u0628\u0647 \u06cc\u06a9\u200c\u0634\u0646\u0628\u0647".split(
                        " "
                    ),
                },
                ru: {
                    months: "\u042f\u043d\u0432\u0430\u0440\u044c \u0424\u0435\u0432\u0440\u0430\u043b\u044c \u041c\u0430\u0440\u0442 \u0410\u043f\u0440\u0435\u043b\u044c \u041c\u0430\u0439 \u0418\u044e\u043d\u044c \u0418\u044e\u043b\u044c \u0410\u0432\u0433\u0443\u0441\u0442 \u0421\u0435\u043d\u0442\u044f\u0431\u0440\u044c \u041e\u043a\u0442\u044f\u0431\u0440\u044c \u041d\u043e\u044f\u0431\u0440\u044c \u0414\u0435\u043a\u0430\u0431\u0440\u044c".split(
                        " "
                    ),
                    dayOfWeekShort: "\u0412\u0441 \u041f\u043d \u0412\u0442 \u0421\u0440 \u0427\u0442 \u041f\u0442 \u0421\u0431".split(" "),
                    dayOfWeek: "\u0412\u043e\u0441\u043a\u0440\u0435\u0441\u0435\u043d\u044c\u0435 \u041f\u043e\u043d\u0435\u0434\u0435\u043b\u044c\u043d\u0438\u043a \u0412\u0442\u043e\u0440\u043d\u0438\u043a \u0421\u0440\u0435\u0434\u0430 \u0427\u0435\u0442\u0432\u0435\u0440\u0433 \u041f\u044f\u0442\u043d\u0438\u0446\u0430 \u0421\u0443\u0431\u0431\u043e\u0442\u0430".split(
                        " "
                    ),
                },
                uk: {
                    months: "\u0421\u0456\u0447\u0435\u043d\u044c \u041b\u044e\u0442\u0438\u0439 \u0411\u0435\u0440\u0435\u0437\u0435\u043d\u044c \u041a\u0432\u0456\u0442\u0435\u043d\u044c \u0422\u0440\u0430\u0432\u0435\u043d\u044c \u0427\u0435\u0440\u0432\u0435\u043d\u044c \u041b\u0438\u043f\u0435\u043d\u044c \u0421\u0435\u0440\u043f\u0435\u043d\u044c \u0412\u0435\u0440\u0435\u0441\u0435\u043d\u044c \u0416\u043e\u0432\u0442\u0435\u043d\u044c \u041b\u0438\u0441\u0442\u043e\u043f\u0430\u0434 \u0413\u0440\u0443\u0434\u0435\u043d\u044c".split(
                        " "
                    ),
                    dayOfWeekShort: "\u041d\u0434\u043b \u041f\u043d\u0434 \u0412\u0442\u0440 \u0421\u0440\u0434 \u0427\u0442\u0432 \u041f\u0442\u043d \u0421\u0431\u0442".split(" "),
                    dayOfWeek: "\u041d\u0435\u0434\u0456\u043b\u044f \u041f\u043e\u043d\u0435\u0434\u0456\u043b\u043e\u043a \u0412\u0456\u0432\u0442\u043e\u0440\u043e\u043a \u0421\u0435\u0440\u0435\u0434\u0430 \u0427\u0435\u0442\u0432\u0435\u0440 \u041f'\u044f\u0442\u043d\u0438\u0446\u044f \u0421\u0443\u0431\u043e\u0442\u0430".split(
                        " "
                    ),
                },
                en: {
                    months: "January February March April May June July August September October November December".split(" "),
                    dayOfWeekShort: "Sun Mon Tue Wed Thu Fri Sat".split(" "),
                    dayOfWeek: "Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),
                },
                el: {
                    months: "\u0399\u03b1\u03bd\u03bf\u03c5\u03ac\u03c1\u03b9\u03bf\u03c2 \u03a6\u03b5\u03b2\u03c1\u03bf\u03c5\u03ac\u03c1\u03b9\u03bf\u03c2 \u039c\u03ac\u03c1\u03c4\u03b9\u03bf\u03c2 \u0391\u03c0\u03c1\u03af\u03bb\u03b9\u03bf\u03c2 \u039c\u03ac\u03b9\u03bf\u03c2 \u0399\u03bf\u03cd\u03bd\u03b9\u03bf\u03c2 \u0399\u03bf\u03cd\u03bb\u03b9\u03bf\u03c2 \u0391\u03cd\u03b3\u03bf\u03c5\u03c3\u03c4\u03bf\u03c2 \u03a3\u03b5\u03c0\u03c4\u03ad\u03bc\u03b2\u03c1\u03b9\u03bf\u03c2 \u039f\u03ba\u03c4\u03ce\u03b2\u03c1\u03b9\u03bf\u03c2 \u039d\u03bf\u03ad\u03bc\u03b2\u03c1\u03b9\u03bf\u03c2 \u0394\u03b5\u03ba\u03ad\u03bc\u03b2\u03c1\u03b9\u03bf\u03c2".split(
                        " "
                    ),
                    dayOfWeekShort: "\u039a\u03c5\u03c1 \u0394\u03b5\u03c5 \u03a4\u03c1\u03b9 \u03a4\u03b5\u03c4 \u03a0\u03b5\u03bc \u03a0\u03b1\u03c1 \u03a3\u03b1\u03b2".split(" "),
                    dayOfWeek: "\u039a\u03c5\u03c1\u03b9\u03b1\u03ba\u03ae \u0394\u03b5\u03c5\u03c4\u03ad\u03c1\u03b1 \u03a4\u03c1\u03af\u03c4\u03b7 \u03a4\u03b5\u03c4\u03ac\u03c1\u03c4\u03b7 \u03a0\u03ad\u03bc\u03c0\u03c4\u03b7 \u03a0\u03b1\u03c1\u03b1\u03c3\u03ba\u03b5\u03c5\u03ae \u03a3\u03ac\u03b2\u03b2\u03b1\u03c4\u03bf".split(
                        " "
                    ),
                },
                de: {
                    months: "Januar Februar M\u00e4rz April Mai Juni Juli August September Oktober November Dezember".split(" "),
                    dayOfWeekShort: "So Mo Di Mi Do Fr Sa".split(" "),
                    dayOfWeek: "Sonntag Montag Dienstag Mittwoch Donnerstag Freitag Samstag".split(" "),
                },
                nl: {
                    months: "januari februari maart april mei juni juli augustus september oktober november december".split(" "),
                    dayOfWeekShort: "zo ma di wo do vr za".split(" "),
                    dayOfWeek: "zondag maandag dinsdag woensdag donderdag vrijdag zaterdag".split(" "),
                },
                tr: {
                    months: "Ocak \u015eubat Mart Nisan May\u0131s Haziran Temmuz A\u011fustos Eyl\u00fcl Ekim Kas\u0131m Aral\u0131k".split(" "),
                    dayOfWeekShort: "Paz Pts Sal \u00c7ar Per Cum Cts".split(" "),
                    dayOfWeek: "Pazar Pazartesi Sal\u0131 \u00c7ar\u015famba Per\u015fembe Cuma Cumartesi".split(" "),
                },
                fr: {
                    months: "Janvier F\u00e9vrier Mars Avril Mai Juin Juillet Ao\u00fbt Septembre Octobre Novembre D\u00e9cembre".split(" "),
                    dayOfWeekShort: "Dim Lun Mar Mer Jeu Ven Sam".split(" "),
                    dayOfWeek: "dimanche lundi mardi mercredi jeudi vendredi samedi".split(" "),
                },
                es: {
                    months: "Enero Febrero Marzo Abril Mayo Junio Julio Agosto Septiembre Octubre Noviembre Diciembre".split(" "),
                    dayOfWeekShort: "Dom Lun Mar Mi\u00e9 Jue Vie S\u00e1b".split(" "),
                    dayOfWeek: "Domingo Lunes Martes Mi\u00e9rcoles Jueves Viernes S\u00e1bado".split(" "),
                },
                th: {
                    months: "\u0e21\u0e01\u0e23\u0e32\u0e04\u0e21 \u0e01\u0e38\u0e21\u0e20\u0e32\u0e1e\u0e31\u0e19\u0e18\u0e4c \u0e21\u0e35\u0e19\u0e32\u0e04\u0e21 \u0e40\u0e21\u0e29\u0e32\u0e22\u0e19 \u0e1e\u0e24\u0e29\u0e20\u0e32\u0e04\u0e21 \u0e21\u0e34\u0e16\u0e38\u0e19\u0e32\u0e22\u0e19 \u0e01\u0e23\u0e01\u0e0e\u0e32\u0e04\u0e21 \u0e2a\u0e34\u0e07\u0e2b\u0e32\u0e04\u0e21 \u0e01\u0e31\u0e19\u0e22\u0e32\u0e22\u0e19 \u0e15\u0e38\u0e25\u0e32\u0e04\u0e21 \u0e1e\u0e24\u0e28\u0e08\u0e34\u0e01\u0e32\u0e22\u0e19 \u0e18\u0e31\u0e19\u0e27\u0e32\u0e04\u0e21".split(
                        " "
                    ),
                    dayOfWeekShort: "\u0e2d\u0e32. \u0e08. \u0e2d. \u0e1e. \u0e1e\u0e24. \u0e28. \u0e2a.".split(" "),
                    dayOfWeek: "\u0e2d\u0e32\u0e17\u0e34\u0e15\u0e22\u0e4c \u0e08\u0e31\u0e19\u0e17\u0e23\u0e4c \u0e2d\u0e31\u0e07\u0e04\u0e32\u0e23 \u0e1e\u0e38\u0e18 \u0e1e\u0e24\u0e2b\u0e31\u0e2a \u0e28\u0e38\u0e01\u0e23\u0e4c \u0e40\u0e2a\u0e32\u0e23\u0e4c \u0e2d\u0e32\u0e17\u0e34\u0e15\u0e22\u0e4c".split(
                        " "
                    ),
                },
                pl: {
                    months: "stycze\u0144 luty marzec kwiecie\u0144 maj czerwiec lipiec sierpie\u0144 wrzesie\u0144 pa\u017adziernik listopad grudzie\u0144".split(" "),
                    dayOfWeekShort: "nd pn wt \u015br cz pt sb".split(" "),
                    dayOfWeek: "niedziela poniedzia\u0142ek wtorek \u015broda czwartek pi\u0105tek sobota".split(" "),
                },
                pt: {
                    months: "Janeiro Fevereiro Mar\u00e7o Abril Maio Junho Julho Agosto Setembro Outubro Novembro Dezembro".split(" "),
                    dayOfWeekShort: "Dom Seg Ter Qua Qui Sex Sab".split(" "),
                    dayOfWeek: "Domingo Segunda Ter\u00e7a Quarta Quinta Sexta S\u00e1bado".split(" "),
                },
                ch: {
                    months: "\u4e00\u6708 \u4e8c\u6708 \u4e09\u6708 \u56db\u6708 \u4e94\u6708 \u516d\u6708 \u4e03\u6708 \u516b\u6708 \u4e5d\u6708 \u5341\u6708 \u5341\u4e00\u6708 \u5341\u4e8c\u6708".split(" "),
                    dayOfWeekShort: "\u65e5\u4e00\u4e8c\u4e09\u56db\u4e94\u516d".split(""),
                },
                se: { months: "Januari Februari Mars April Maj Juni Juli Augusti September Oktober November December".split(" "), dayOfWeekShort: "S\u00f6n M\u00e5n Tis Ons Tor Fre L\u00f6r".split(" ") },
                km: {
                    months: "\u1798\u1780\u179a\u17b6\u200b \u1780\u17bb\u1798\u17d2\u1797\u17c8 \u1798\u17b7\u1793\u17b6\u200b \u1798\u17c1\u179f\u17b6\u200b \u17a7\u179f\u1797\u17b6\u200b \u1798\u17b7\u1790\u17bb\u1793\u17b6\u200b \u1780\u1780\u17d2\u1780\u178a\u17b6\u200b \u179f\u17b8\u17a0\u17b6\u200b \u1780\u1789\u17d2\u1789\u17b6\u200b \u178f\u17bb\u179b\u17b6\u200b \u179c\u17b7\u1785\u17d2\u1786\u17b7\u1780\u17b6 \u1792\u17d2\u1793\u17bc\u200b".split(
                        " "
                    ),
                    dayOfWeekShort: "\u17a2\u17b6\u1791\u17b7\u200b \u1785\u17d0\u1793\u17d2\u1791\u200b \u17a2\u1784\u17d2\u1782\u17b6\u179a\u200b \u1796\u17bb\u1792\u200b \u1796\u17d2\u179a\u17a0\u200b\u200b \u179f\u17bb\u1780\u17d2\u179a\u200b \u179f\u17c5\u179a\u17cd".split(
                        " "
                    ),
                    dayOfWeek: "\u17a2\u17b6\u1791\u17b7\u178f\u17d2\u1799\u200b \u1785\u17d0\u1793\u17d2\u1791\u200b \u17a2\u1784\u17d2\u1782\u17b6\u179a\u200b \u1796\u17bb\u1792\u200b \u1796\u17d2\u179a\u17a0\u179f\u17d2\u1794\u178f\u17b7\u17cd\u200b \u179f\u17bb\u1780\u17d2\u179a\u200b \u179f\u17c5\u179a\u17cd".split(
                        " "
                    ),
                },
                kr: {
                    months: "1\uc6d4 2\uc6d4 3\uc6d4 4\uc6d4 5\uc6d4 6\uc6d4 7\uc6d4 8\uc6d4 9\uc6d4 10\uc6d4 11\uc6d4 12\uc6d4".split(" "),
                    dayOfWeekShort: "\uc77c\uc6d4\ud654\uc218\ubaa9\uae08\ud1a0".split(""),
                    dayOfWeek: "\uc77c\uc694\uc77c \uc6d4\uc694\uc77c \ud654\uc694\uc77c \uc218\uc694\uc77c \ubaa9\uc694\uc77c \uae08\uc694\uc77c \ud1a0\uc694\uc77c".split(" "),
                },
                it: {
                    months: "Gennaio Febbraio Marzo Aprile Maggio Giugno Luglio Agosto Settembre Ottobre Novembre Dicembre".split(" "),
                    dayOfWeekShort: "Dom Lun Mar Mer Gio Ven Sab".split(" "),
                    dayOfWeek: "Domenica Luned\u00ec Marted\u00ec Mercoled\u00ec Gioved\u00ec Venerd\u00ec Sabato".split(" "),
                },
                da: {
                    months: "Januar Februar Marts April Maj Juni Juli August September Oktober November December".split(" "),
                    dayOfWeekShort: "S\u00f8n Man Tir Ons Tor Fre L\u00f8r".split(" "),
                    dayOfWeek: "s\u00f8ndag mandag tirsdag onsdag torsdag fredag l\u00f8rdag".split(" "),
                },
                no: {
                    months: "Januar Februar Mars April Mai Juni Juli August September Oktober November Desember".split(" "),
                    dayOfWeekShort: "S\u00f8n Man Tir Ons Tor Fre L\u00f8r".split(" "),
                    dayOfWeek: "S\u00f8ndag Mandag Tirsdag Onsdag Torsdag Fredag L\u00f8rdag".split(" "),
                },
                ja: {
                    months: "1\u6708 2\u6708 3\u6708 4\u6708 5\u6708 6\u6708 7\u6708 8\u6708 9\u6708 10\u6708 11\u6708 12\u6708".split(" "),
                    dayOfWeekShort: "\u65e5\u6708\u706b\u6c34\u6728\u91d1\u571f".split(""),
                    dayOfWeek: "\u65e5\u66dc \u6708\u66dc \u706b\u66dc \u6c34\u66dc \u6728\u66dc \u91d1\u66dc \u571f\u66dc".split(" "),
                },
                vi: {
                    months: "Th\u00e1ng 1;Th\u00e1ng 2;Th\u00e1ng 3;Th\u00e1ng 4;Th\u00e1ng 5;Th\u00e1ng 6;Th\u00e1ng 7;Th\u00e1ng 8;Th\u00e1ng 9;Th\u00e1ng 10;Th\u00e1ng 11;Th\u00e1ng 12".split(";"),
                    dayOfWeekShort: "CN T2 T3 T4 T5 T6 T7".split(" "),
                    dayOfWeek: "Ch\u1ee7 nh\u1eadt;Th\u1ee9 hai;Th\u1ee9 ba;Th\u1ee9 t\u01b0;Th\u1ee9 n\u0103m;Th\u1ee9 s\u00e1u;Th\u1ee9 b\u1ea3y".split(";"),
                },
                sl: {
                    months: "Januar Februar Marec April Maj Junij Julij Avgust September Oktober November December".split(" "),
                    dayOfWeekShort: "Ned Pon Tor Sre \u010cet Pet Sob".split(" "),
                    dayOfWeek: "Nedelja Ponedeljek Torek Sreda \u010cetrtek Petek Sobota".split(" "),
                },
                cs: {
                    months: "Leden \u00danor B\u0159ezen Duben Kv\u011bten \u010cerven \u010cervenec Srpen Z\u00e1\u0159\u00ed \u0158\u00edjen Listopad Prosinec".split(" "),
                    dayOfWeekShort: "Ne Po \u00dat St \u010ct P\u00e1 So".split(" "),
                },
                hu: {
                    months: "Janu\u00e1r Febru\u00e1r M\u00e1rcius \u00c1prilis M\u00e1jus J\u00fanius J\u00falius Augusztus Szeptember Okt\u00f3ber November December".split(" "),
                    dayOfWeekShort: "Va H\u00e9 Ke Sze Cs P\u00e9 Szo".split(" "),
                    dayOfWeek: "vas\u00e1rnap h\u00e9tf\u0151 kedd szerda cs\u00fct\u00f6rt\u00f6k p\u00e9ntek szombat".split(" "),
                },
                az: {
                    months: "Yanvar Fevral Mart Aprel May Iyun Iyul Avqust Sentyabr Oktyabr Noyabr Dekabr".split(" "),
                    dayOfWeekShort: "B Be \u00c7a \u00c7 Ca C \u015e".split(" "),
                    dayOfWeek: "Bazar;Bazar ert\u0259si;\u00c7\u0259r\u015f\u0259nb\u0259 ax\u015fam\u0131;\u00c7\u0259r\u015f\u0259nb\u0259;C\u00fcm\u0259 ax\u015fam\u0131;C\u00fcm\u0259;\u015e\u0259nb\u0259".split(";"),
                },
                bs: {
                    months: "Januar Februar Mart April Maj Jun Jul Avgust Septembar Oktobar Novembar Decembar".split(" "),
                    dayOfWeekShort: "Ned Pon Uto Sri \u010cet Pet Sub".split(" "),
                    dayOfWeek: "Nedjelja Ponedjeljak Utorak Srijeda \u010cetvrtak Petak Subota".split(" "),
                },
                ca: {
                    months: "Gener Febrer Mar\u00e7 Abril Maig Juny Juliol Agost Setembre Octubre Novembre Desembre".split(" "),
                    dayOfWeekShort: "Dg Dl Dt Dc Dj Dv Ds".split(" "),
                    dayOfWeek: "Diumenge Dilluns Dimarts Dimecres Dijous Divendres Dissabte".split(" "),
                },
                "en-GB": {
                    months: "January February March April May June July August September October November December".split(" "),
                    dayOfWeekShort: "Sun Mon Tue Wed Thu Fri Sat".split(" "),
                    dayOfWeek: "Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),
                },
                et: {
                    months: "Jaanuar Veebruar M\u00e4rts Aprill Mai Juuni Juuli August September Oktoober November Detsember".split(" "),
                    dayOfWeekShort: "PETKNRL".split(""),
                    dayOfWeek: "P\u00fchap\u00e4ev Esmasp\u00e4ev Teisip\u00e4ev Kolmap\u00e4ev Neljap\u00e4ev Reede Laup\u00e4ev".split(" "),
                },
                eu: {
                    months: "Urtarrila Otsaila Martxoa Apirila Maiatza Ekaina Uztaila Abuztua Iraila Urria Azaroa Abendua".split(" "),
                    dayOfWeekShort: "Ig. Al. Ar. Az. Og. Or. La.".split(" "),
                    dayOfWeek: "Igandea Astelehena Asteartea Asteazkena Osteguna Ostirala Larunbata".split(" "),
                },
                fi: {
                    months: "Tammikuu Helmikuu Maaliskuu Huhtikuu Toukokuu Kes\u00e4kuu Hein\u00e4kuu Elokuu Syyskuu Lokakuu Marraskuu Joulukuu".split(" "),
                    dayOfWeekShort: "Su Ma Ti Ke To Pe La".split(" "),
                    dayOfWeek: "sunnuntai maanantai tiistai keskiviikko torstai perjantai lauantai".split(" "),
                },
                gl: { months: "Xan Feb Maz Abr Mai Xun Xul Ago Set Out Nov Dec".split(" "), dayOfWeekShort: "Dom Lun Mar Mer Xov Ven Sab".split(" "), dayOfWeek: "Domingo Luns Martes M\u00e9rcores Xoves Venres S\u00e1bado".split(" ") },
                hr: {
                    months: "Sije\u010danj Velja\u010da O\u017eujak Travanj Svibanj Lipanj Srpanj Kolovoz Rujan Listopad Studeni Prosinac".split(" "),
                    dayOfWeekShort: "Ned Pon Uto Sri \u010cet Pet Sub".split(" "),
                    dayOfWeek: "Nedjelja Ponedjeljak Utorak Srijeda \u010cetvrtak Petak Subota".split(" "),
                },
                ko: {
                    months: "1\uc6d4 2\uc6d4 3\uc6d4 4\uc6d4 5\uc6d4 6\uc6d4 7\uc6d4 8\uc6d4 9\uc6d4 10\uc6d4 11\uc6d4 12\uc6d4".split(" "),
                    dayOfWeekShort: "\uc77c\uc6d4\ud654\uc218\ubaa9\uae08\ud1a0".split(""),
                    dayOfWeek: "\uc77c\uc694\uc77c \uc6d4\uc694\uc77c \ud654\uc694\uc77c \uc218\uc694\uc77c \ubaa9\uc694\uc77c \uae08\uc694\uc77c \ud1a0\uc694\uc77c".split(" "),
                },
                lt: {
                    months: "Sausio Vasario Kovo Baland\u017eio Gegu\u017e\u0117s Bir\u017eelio Liepos Rugpj\u016b\u010dio Rugs\u0117jo Spalio Lapkri\u010dio Gruod\u017eio".split(" "),
                    dayOfWeekShort: "Sek Pir Ant Tre Ket Pen \u0160e\u0161".split(" "),
                    dayOfWeek: "Sekmadienis Pirmadienis Antradienis Tre\u010diadienis Ketvirtadienis Penktadienis \u0160e\u0161tadienis".split(" "),
                },
                lv: {
                    months: "Janv\u0101ris;Febru\u0101ris;Marts;Apr\u012blis ;Maijs;J\u016bnijs;J\u016blijs;Augusts;Septembris;Oktobris;Novembris;Decembris".split(";"),
                    dayOfWeekShort: "Sv Pr Ot Tr Ct Pk St".split(" "),
                    dayOfWeek: "Sv\u0113tdiena Pirmdiena Otrdiena Tre\u0161diena Ceturtdiena Piektdiena Sestdiena".split(" "),
                },
                mk: {
                    months: "\u0458\u0430\u043d\u0443\u0430\u0440\u0438 \u0444\u0435\u0432\u0440\u0443\u0430\u0440\u0438 \u043c\u0430\u0440\u0442 \u0430\u043f\u0440\u0438\u043b \u043c\u0430\u0458 \u0458\u0443\u043d\u0438 \u0458\u0443\u043b\u0438 \u0430\u0432\u0433\u0443\u0441\u0442 \u0441\u0435\u043f\u0442\u0435\u043c\u0432\u0440\u0438 \u043e\u043a\u0442\u043e\u043c\u0432\u0440\u0438 \u043d\u043e\u0435\u043c\u0432\u0440\u0438 \u0434\u0435\u043a\u0435\u043c\u0432\u0440\u0438".split(
                        " "
                    ),
                    dayOfWeekShort: "\u043d\u0435\u0434 \u043f\u043e\u043d \u0432\u0442\u043e \u0441\u0440\u0435 \u0447\u0435\u0442 \u043f\u0435\u0442 \u0441\u0430\u0431".split(" "),
                    dayOfWeek: "\u041d\u0435\u0434\u0435\u043b\u0430 \u041f\u043e\u043d\u0435\u0434\u0435\u043b\u043d\u0438\u043a \u0412\u0442\u043e\u0440\u043d\u0438\u043a \u0421\u0440\u0435\u0434\u0430 \u0427\u0435\u0442\u0432\u0440\u0442\u043e\u043a \u041f\u0435\u0442\u043e\u043a \u0421\u0430\u0431\u043e\u0442\u0430".split(
                        " "
                    ),
                },
                mn: {
                    months: "1-\u0440 \u0441\u0430\u0440;2-\u0440 \u0441\u0430\u0440;3-\u0440 \u0441\u0430\u0440;4-\u0440 \u0441\u0430\u0440;5-\u0440 \u0441\u0430\u0440;6-\u0440 \u0441\u0430\u0440;7-\u0440 \u0441\u0430\u0440;8-\u0440 \u0441\u0430\u0440;9-\u0440 \u0441\u0430\u0440;10-\u0440 \u0441\u0430\u0440;11-\u0440 \u0441\u0430\u0440;12-\u0440 \u0441\u0430\u0440".split(
                        ";"
                    ),
                    dayOfWeekShort: "\u0414\u0430\u0432 \u041c\u044f\u0433 \u041b\u0445\u0430 \u041f\u04af\u0440 \u0411\u0441\u043d \u0411\u044f\u043c \u041d\u044f\u043c".split(" "),
                    dayOfWeek: "\u0414\u0430\u0432\u0430\u0430 \u041c\u044f\u0433\u043c\u0430\u0440 \u041b\u0445\u0430\u0433\u0432\u0430 \u041f\u04af\u0440\u044d\u0432 \u0411\u0430\u0430\u0441\u0430\u043d \u0411\u044f\u043c\u0431\u0430 \u041d\u044f\u043c".split(
                        " "
                    ),
                },
                "pt-BR": {
                    months: "Janeiro Fevereiro Mar\u00e7o Abril Maio Junho Julho Agosto Setembro Outubro Novembro Dezembro".split(" "),
                    dayOfWeekShort: "Dom Seg Ter Qua Qui Sex S\u00e1b".split(" "),
                    dayOfWeek: "Domingo Segunda Ter\u00e7a Quarta Quinta Sexta S\u00e1bado".split(" "),
                },
                sk: {
                    months: "Janu\u00e1r Febru\u00e1r Marec Apr\u00edl M\u00e1j J\u00fan J\u00fal August September Okt\u00f3ber November December".split(" "),
                    dayOfWeekShort: "Ne Po Ut St \u0160t Pi So".split(" "),
                    dayOfWeek: "Nede\u013ea Pondelok Utorok Streda \u0160tvrtok Piatok Sobota".split(" "),
                },
                sq: {
                    months: "Janar Shkurt Mars Prill Maj Qershor Korrik Gusht Shtator Tetor N\u00ebntor Dhjetor".split(" "),
                    dayOfWeekShort: "Die H\u00ebn Mar M\u00ebr Enj Pre Shtu".split(" "),
                    dayOfWeek: "E Diel;E H\u00ebn\u00eb;E Mart\u0113;E M\u00ebrkur\u00eb;E Enjte;E Premte;E Shtun\u00eb".split(";"),
                },
                "sr-YU": {
                    months: "Januar Februar Mart April Maj Jun Jul Avgust Septembar Oktobar Novembar Decembar".split(" "),
                    dayOfWeekShort: "Ned Pon Uto Sre \u010det Pet Sub".split(" "),
                    dayOfWeek: "Nedelja Ponedeljak Utorak Sreda \u010cetvrtak Petak Subota".split(" "),
                },
                sr: {
                    months: "\u0458\u0430\u043d\u0443\u0430\u0440 \u0444\u0435\u0431\u0440\u0443\u0430\u0440 \u043c\u0430\u0440\u0442 \u0430\u043f\u0440\u0438\u043b \u043c\u0430\u0458 \u0458\u0443\u043d \u0458\u0443\u043b \u0430\u0432\u0433\u0443\u0441\u0442 \u0441\u0435\u043f\u0442\u0435\u043c\u0431\u0430\u0440 \u043e\u043a\u0442\u043e\u0431\u0430\u0440 \u043d\u043e\u0432\u0435\u043c\u0431\u0430\u0440 \u0434\u0435\u0446\u0435\u043c\u0431\u0430\u0440".split(
                        " "
                    ),
                    dayOfWeekShort: "\u043d\u0435\u0434 \u043f\u043e\u043d \u0443\u0442\u043e \u0441\u0440\u0435 \u0447\u0435\u0442 \u043f\u0435\u0442 \u0441\u0443\u0431".split(" "),
                    dayOfWeek: "\u041d\u0435\u0434\u0435\u0459\u0430 \u041f\u043e\u043d\u0435\u0434\u0435\u0459\u0430\u043a \u0423\u0442\u043e\u0440\u0430\u043a \u0421\u0440\u0435\u0434\u0430 \u0427\u0435\u0442\u0432\u0440\u0442\u0430\u043a \u041f\u0435\u0442\u0430\u043a \u0421\u0443\u0431\u043e\u0442\u0430".split(
                        " "
                    ),
                },
                sv: {
                    months: "Januari Februari Mars April Maj Juni Juli Augusti September Oktober November December".split(" "),
                    dayOfWeekShort: "S\u00f6n M\u00e5n Tis Ons Tor Fre L\u00f6r".split(" "),
                    dayOfWeek: "S\u00f6ndag M\u00e5ndag Tisdag Onsdag Torsdag Fredag L\u00f6rdag".split(" "),
                },
                "zh-TW": {
                    months: "\u4e00\u6708 \u4e8c\u6708 \u4e09\u6708 \u56db\u6708 \u4e94\u6708 \u516d\u6708 \u4e03\u6708 \u516b\u6708 \u4e5d\u6708 \u5341\u6708 \u5341\u4e00\u6708 \u5341\u4e8c\u6708".split(" "),
                    dayOfWeekShort: "\u65e5\u4e00\u4e8c\u4e09\u56db\u4e94\u516d".split(""),
                    dayOfWeek: "\u661f\u671f\u65e5 \u661f\u671f\u4e00 \u661f\u671f\u4e8c \u661f\u671f\u4e09 \u661f\u671f\u56db \u661f\u671f\u4e94 \u661f\u671f\u516d".split(" "),
                },
                zh: {
                    months: "\u4e00\u6708 \u4e8c\u6708 \u4e09\u6708 \u56db\u6708 \u4e94\u6708 \u516d\u6708 \u4e03\u6708 \u516b\u6708 \u4e5d\u6708 \u5341\u6708 \u5341\u4e00\u6708 \u5341\u4e8c\u6708".split(" "),
                    dayOfWeekShort: "\u65e5\u4e00\u4e8c\u4e09\u56db\u4e94\u516d".split(""),
                    dayOfWeek: "\u661f\u671f\u65e5 \u661f\u671f\u4e00 \u661f\u671f\u4e8c \u661f\u671f\u4e09 \u661f\u671f\u56db \u661f\u671f\u4e94 \u661f\u671f\u516d".split(" "),
                },
                ug: {
                    months: "1-\u0626\u0627\u064a 2-\u0626\u0627\u064a 3-\u0626\u0627\u064a 4-\u0626\u0627\u064a 5-\u0626\u0627\u064a 6-\u0626\u0627\u064a 7-\u0626\u0627\u064a 8-\u0626\u0627\u064a 9-\u0626\u0627\u064a 10-\u0626\u0627\u064a 11-\u0626\u0627\u064a 12-\u0626\u0627\u064a".split(
                        " "
                    ),
                    dayOfWeek: "\u064a\u06d5\u0643\u0634\u06d5\u0646\u0628\u06d5 \u062f\u06c8\u0634\u06d5\u0646\u0628\u06d5 \u0633\u06d5\u064a\u0634\u06d5\u0646\u0628\u06d5 \u0686\u0627\u0631\u0634\u06d5\u0646\u0628\u06d5 \u067e\u06d5\u064a\u0634\u06d5\u0646\u0628\u06d5 \u062c\u06c8\u0645\u06d5 \u0634\u06d5\u0646\u0628\u06d5".split(
                        " "
                    ),
                },
                he: {
                    months: "\u05d9\u05e0\u05d5\u05d0\u05e8 \u05e4\u05d1\u05e8\u05d5\u05d0\u05e8 \u05de\u05e8\u05e5 \u05d0\u05e4\u05e8\u05d9\u05dc \u05de\u05d0\u05d9 \u05d9\u05d5\u05e0\u05d9 \u05d9\u05d5\u05dc\u05d9 \u05d0\u05d5\u05d2\u05d5\u05e1\u05d8 \u05e1\u05e4\u05d8\u05de\u05d1\u05e8 \u05d0\u05d5\u05e7\u05d8\u05d5\u05d1\u05e8 \u05e0\u05d5\u05d1\u05de\u05d1\u05e8 \u05d3\u05e6\u05de\u05d1\u05e8".split(
                        " "
                    ),
                    dayOfWeekShort: "\u05d0' \u05d1' \u05d2' \u05d3' \u05d4' \u05d5' \u05e9\u05d1\u05ea".split(" "),
                    dayOfWeek: "\u05e8\u05d0\u05e9\u05d5\u05df \u05e9\u05e0\u05d9 \u05e9\u05dc\u05d9\u05e9\u05d9 \u05e8\u05d1\u05d9\u05e2\u05d9 \u05d7\u05de\u05d9\u05e9\u05d9 \u05e9\u05d9\u05e9\u05d9 \u05e9\u05d1\u05ea \u05e8\u05d0\u05e9\u05d5\u05df".split(
                        " "
                    ),
                },
                hy: {
                    months: "\u0540\u0578\u0582\u0576\u057e\u0561\u0580 \u0553\u0565\u057f\u0580\u057e\u0561\u0580 \u0544\u0561\u0580\u057f \u0531\u057a\u0580\u056b\u056c \u0544\u0561\u0575\u056b\u057d \u0540\u0578\u0582\u0576\u056b\u057d \u0540\u0578\u0582\u056c\u056b\u057d \u0555\u0563\u0578\u057d\u057f\u0578\u057d \u054d\u0565\u057a\u057f\u0565\u0574\u0562\u0565\u0580 \u0540\u0578\u056f\u057f\u0565\u0574\u0562\u0565\u0580 \u0546\u0578\u0575\u0565\u0574\u0562\u0565\u0580 \u0534\u0565\u056f\u057f\u0565\u0574\u0562\u0565\u0580".split(
                        " "
                    ),
                    dayOfWeekShort: "\u053f\u056b \u0535\u0580\u056f \u0535\u0580\u0584 \u0549\u0578\u0580 \u0540\u0576\u0563 \u0548\u0582\u0580\u0562 \u0547\u0562\u0569".split(" "),
                    dayOfWeek: "\u053f\u056b\u0580\u0561\u056f\u056b \u0535\u0580\u056f\u0578\u0582\u0577\u0561\u0562\u0569\u056b \u0535\u0580\u0565\u0584\u0577\u0561\u0562\u0569\u056b \u0549\u0578\u0580\u0565\u0584\u0577\u0561\u0562\u0569\u056b \u0540\u056b\u0576\u0563\u0577\u0561\u0562\u0569\u056b \u0548\u0582\u0580\u0562\u0561\u0569 \u0547\u0561\u0562\u0561\u0569".split(
                        " "
                    ),
                },
                kg: {
                    months: "\u04ae\u0447\u0442\u04af\u043d \u0430\u0439\u044b;\u0411\u0438\u0440\u0434\u0438\u043d \u0430\u0439\u044b;\u0416\u0430\u043b\u0433\u0430\u043d \u041a\u0443\u0440\u0430\u043d;\u0427\u044b\u043d \u041a\u0443\u0440\u0430\u043d;\u0411\u0443\u0433\u0443;\u041a\u0443\u043b\u0436\u0430;\u0422\u0435\u043a\u0435;\u0411\u0430\u0448 \u041e\u043e\u043d\u0430;\u0410\u044f\u043a \u041e\u043e\u043d\u0430;\u0422\u043e\u0433\u0443\u0437\u0434\u0443\u043d \u0430\u0439\u044b;\u0416\u0435\u0442\u0438\u043d\u0438\u043d \u0430\u0439\u044b;\u0411\u0435\u0448\u0442\u0438\u043d \u0430\u0439\u044b".split(
                        ";"
                    ),
                    dayOfWeekShort: "\u0416\u0435\u043a \u0414\u04af\u0439 \u0428\u0435\u0439 \u0428\u0430\u0440 \u0411\u0435\u0439 \u0416\u0443\u043c \u0418\u0448\u0435".split(" "),
                    dayOfWeek: "\u0416\u0435\u043a\u0448\u0435\u043c\u0431 \u0414\u04af\u0439\u0448\u04e9\u043c\u0431 \u0428\u0435\u0439\u0448\u0435\u043c\u0431 \u0428\u0430\u0440\u0448\u0435\u043c\u0431 \u0411\u0435\u0439\u0448\u0435\u043c\u0431\u0438 \u0416\u0443\u043c\u0430 \u0418\u0448\u0435\u043d\u0431".split(
                        " "
                    ),
                },
                rm: {
                    months: "Schaner Favrer Mars Avrigl Matg Zercladur Fanadur Avust Settember October November December".split(" "),
                    dayOfWeekShort: "Du Gli Ma Me Gie Ve So".split(" "),
                    dayOfWeek: "Dumengia Glindesdi Mardi Mesemna Gievgia Venderdi Sonda".split(" "),
                },
                ka: {
                    months: "\u10d8\u10d0\u10dc\u10d5\u10d0\u10e0\u10d8 \u10d7\u10d4\u10d1\u10d4\u10e0\u10d5\u10d0\u10da\u10d8 \u10db\u10d0\u10e0\u10e2\u10d8 \u10d0\u10de\u10e0\u10d8\u10da\u10d8 \u10db\u10d0\u10d8\u10e1\u10d8 \u10d8\u10d5\u10dc\u10d8\u10e1\u10d8 \u10d8\u10d5\u10da\u10d8\u10e1\u10d8 \u10d0\u10d2\u10d5\u10d8\u10e1\u10e2\u10dd \u10e1\u10d4\u10e5\u10e2\u10d4\u10db\u10d1\u10d4\u10e0\u10d8 \u10dd\u10e5\u10e2\u10dd\u10db\u10d1\u10d4\u10e0\u10d8 \u10dc\u10dd\u10d4\u10db\u10d1\u10d4\u10e0\u10d8 \u10d3\u10d4\u10d9\u10d4\u10db\u10d1\u10d4\u10e0\u10d8".split(
                        " "
                    ),
                    dayOfWeekShort: "\u10d9\u10d5 \u10dd\u10e0\u10e8 \u10e1\u10d0\u10db\u10e8 \u10dd\u10d7\u10ee \u10ee\u10e3\u10d7 \u10de\u10d0\u10e0 \u10e8\u10d0\u10d1".split(" "),
                    dayOfWeek: "\u10d9\u10d5\u10d8\u10e0\u10d0 \u10dd\u10e0\u10e8\u10d0\u10d1\u10d0\u10d7\u10d8 \u10e1\u10d0\u10db\u10e8\u10d0\u10d1\u10d0\u10d7\u10d8 \u10dd\u10d7\u10ee\u10e8\u10d0\u10d1\u10d0\u10d7\u10d8 \u10ee\u10e3\u10d7\u10e8\u10d0\u10d1\u10d0\u10d7\u10d8 \u10de\u10d0\u10e0\u10d0\u10e1\u10d9\u10d4\u10d5\u10d8 \u10e8\u10d0\u10d1\u10d0\u10d7\u10d8".split(
                        " "
                    ),
                },
            },
            ownerDocument: document,
            contentWindow: window,
            value: "",
            rtl: !1,
            format: "Y/m/d H:i",
            formatTime: "H:i",
            formatDate: "Y/m/d",
            startDate: !1,
            step: 60,
            monthChangeSpinner: !0,
            closeOnDateSelect: !1,
            closeOnTimeSelect: !0,
            closeOnWithoutClick: !0,
            closeOnInputClick: !0,
            openOnFocus: !0,
            timepicker: !0,
            datepicker: !0,
            weeks: !1,
            defaultTime: !1,
            defaultDate: !1,
            minDate: !1,
            maxDate: !1,
            minTime: !1,
            maxTime: !1,
            minDateTime: !1,
            maxDateTime: !1,
            allowTimes: [],
            opened: !1,
            initTime: !0,
            inline: !1,
            theme: "",
            touchMovedThreshold: 5,
            onSelectDate: function () {},
            onSelectTime: function () {},
            onChangeMonth: function () {},
            onGetWeekOfYear: function () {},
            onChangeYear: function () {},
            onChangeDateTime: function () {},
            onShow: function () {},
            onClose: function () {},
            onGenerate: function () {},
            withoutCopyright: !0,
            inverseButton: !1,
            hours12: !1,
            next: "xdsoft_next",
            prev: "xdsoft_prev",
            dayOfWeekStart: 0,
            parentID: "body",
            timeHeightInTimePicker: 25,
            timepickerScrollbar: !0,
            todayButton: !0,
            prevButton: !0,
            nextButton: !0,
            defaultSelect: !0,
            scrollMonth: !0,
            scrollTime: !0,
            scrollInput: !0,
            lazyInit: !1,
            mask: !1,
            validateOnBlur: !0,
            allowBlank: !0,
            yearStart: 1950,
            yearEnd: 2050,
            monthStart: 0,
            monthEnd: 11,
            style: "",
            id: "",
            fixed: !1,
            roundTime: "round",
            className: "",
            weekends: [],
            highlightedDates: [],
            highlightedPeriods: [],
            allowDates: [],
            allowDateRe: null,
            disabledDates: [],
            disabledWeekDays: [],
            yearOffset: 0,
            beforeShowDay: null,
            enterLikeTab: !0,
            showApplyButton: !1,
            insideParent: !1,
        },
        e = null,
        v = null,
        C = "en",
        m = { meridiem: ["AM", "PM"] },
        d = function () {
            var c = t.i18n[C],
                c = {
                    days: c.dayOfWeek,
                    daysShort: c.dayOfWeekShort,
                    months: c.months,
                    monthsShort: b.map(c.months, function (b) {
                        return b.substring(0, 3);
                    }),
                };
            "function" === typeof DateFormatter && (e = v = new DateFormatter({ dateSettings: b.extend({}, m, c) }));
        },
        n = {
            moment: {
                default_options: { format: "YYYY/MM/DD HH:mm", formatDate: "YYYY/MM/DD", formatTime: "HH:mm" },
                formatter: {
                    parseDate: function (b, d) {
                        if (f(d)) return v.parseDate(b, d);
                        var e = moment(b, d);
                        return e.isValid() ? e.toDate() : !1;
                    },
                    formatDate: function (b, d) {
                        return f(d) ? v.formatDate(b, d) : moment(b).format(d);
                    },
                    formatMask: function (b) {
                        return b.replace(/Y{4}/g, "9999").replace(/Y{2}/g, "99").replace(/M{2}/g, "19").replace(/D{2}/g, "39").replace(/H{2}/g, "29").replace(/m{2}/g, "59").replace(/s{2}/g, "59");
                    },
                },
            },
        };
    b.datetimepicker = {
        setLocale: function (b) {
            b = t.i18n[b] ? b : "en";
            C !== b && ((C = b), d());
        },
        setDateFormatter: function (c) {
            "string" === typeof c && n.hasOwnProperty(c) ? ((c = n[c]), b.extend(t, c.default_options), (e = c.formatter)) : (e = c);
        },
    };
    var l = {
            RFC_2822: "D, d M Y H:i:s O",
            ATOM: "Y-m-dTH:i:sP",
            ISO_8601: "Y-m-dTH:i:sO",
            RFC_822: "D, d M y H:i:s O",
            RFC_850: "l, d-M-y H:i:s T",
            RFC_1036: "D, d M y H:i:s O",
            RFC_1123: "D, d M Y H:i:s O",
            RSS: "D, d M Y H:i:s O",
            W3C: "Y-m-dTH:i:sP",
        },
        f = function (b) {
            return -1 === Object.values(l).indexOf(b) ? !1 : !0;
        };
    b.extend(b.datetimepicker, l);
    d();
    window.getComputedStyle ||
        (window.getComputedStyle = function (b) {
            this.el = b;
            this.getPropertyValue = function (d) {
                var e = /(-([a-z]))/g;
                "float" === d && (d = "styleFloat");
                e.test(d) &&
                    (d = d.replace(e, function (b, a, c) {
                        return c.toUpperCase();
                    }));
                return b.currentStyle[d] || null;
            };
            return this;
        });
    Array.prototype.indexOf ||
        (Array.prototype.indexOf = function (b, d) {
            var e, f;
            e = d || 0;
            for (f = this.length; e < f; e += 1) if (this[e] === b) return e;
            return -1;
        });
    Date.prototype.countDaysInMonth = function () {
        return new Date(this.getFullYear(), this.getMonth() + 1, 0).getDate();
    };
    b.fn.xdsoftScroller = function (c, d) {
        return this.each(function () {
            var e = b(this),
                f = function (a) {
                    var b = { x: 0, y: 0 };
                    if ("touchstart" === a.type || "touchmove" === a.type || "touchend" === a.type || "touchcancel" === a.type) (a = a.originalEvent.touches[0] || a.originalEvent.changedTouches[0]), (b.x = a.clientX), (b.y = a.clientY);
                    else if ("mousedown" === a.type || "mouseup" === a.type || "mousemove" === a.type || "mouseover" === a.type || "mouseout" === a.type || "mouseenter" === a.type || "mouseleave" === a.type)
                        (b.x = a.clientX), (b.y = a.clientY);
                    return b;
                },
                a,
                l,
                m,
                n,
                p,
                D = 100,
                t = !1,
                v = 0,
                h = 0,
                C = 0,
                L = !1,
                P = 0,
                O = function () {};
            "hide" === d
                ? e.find(".xdsoft_scrollbar").hide()
                : (b(this).hasClass("xdsoft_scroller_box") ||
                      ((a = e.children().eq(0)),
                      (l = e[0].clientHeight),
                      (m = a[0].offsetHeight),
                      (n = b('<div class="xdsoft_scrollbar"></div>')),
                      (p = b('<div class="xdsoft_scroller"></div>')),
                      n.append(p),
                      e.addClass("xdsoft_scroller_box").append(n),
                      (O = function (a) {
                          a = f(a).y - v + P;
                          0 > a && (a = 0);
                          a + p[0].offsetHeight > C && (a = C - p[0].offsetHeight);
                          e.trigger("scroll_element.xdsoft_scroller", [D ? a / D : 0]);
                      }),
                      p
                          .on("touchstart.xdsoft_scroller mousedown.xdsoft_scroller", function (a) {
                              l || e.trigger("resize_scroll.xdsoft_scroller", [d]);
                              v = f(a).y;
                              P = parseInt(p.css("margin-top"), 10);
                              C = n[0].offsetHeight;
                              "mousedown" === a.type || "touchstart" === a.type
                                  ? (c.ownerDocument && b(c.ownerDocument.body).addClass("xdsoft_noselect"),
                                    b([c.ownerDocument.body, c.contentWindow]).on("touchend mouseup.xdsoft_scroller", function y() {
                                        b([c.ownerDocument.body, c.contentWindow]).off("touchend mouseup.xdsoft_scroller", y).off("mousemove.xdsoft_scroller", O).removeClass("xdsoft_noselect");
                                    }),
                                    b(c.ownerDocument.body).on("mousemove.xdsoft_scroller", O))
                                  : ((L = !0), a.stopPropagation(), a.preventDefault());
                          })
                          .on("touchmove", function (a) {
                              L && (a.preventDefault(), O(a));
                          })
                          .on("touchend touchcancel", function () {
                              L = !1;
                              P = 0;
                          }),
                      e
                          .on("scroll_element.xdsoft_scroller", function (b, c) {
                              l || e.trigger("resize_scroll.xdsoft_scroller", [c, !0]);
                              c = 1 < c ? 1 : 0 > c || isNaN(c) ? 0 : c;
                              p.css("margin-top", D * c);
                              setTimeout(function () {
                                  a.css("marginTop", -parseInt((a[0].offsetHeight - l) * c, 10));
                              }, 10);
                          })
                          .on("resize_scroll.xdsoft_scroller", function (b, c, d) {
                              var h;
                              l = e[0].clientHeight;
                              m = a[0].offsetHeight;
                              b = l / m;
                              h = b * n[0].offsetHeight;
                              1 < b
                                  ? p.hide()
                                  : (p.show(),
                                    p.css("height", parseInt(10 < h ? h : 10, 10)),
                                    (D = n[0].offsetHeight - p[0].offsetHeight),
                                    !0 !== d && e.trigger("scroll_element.xdsoft_scroller", [c || Math.abs(parseInt(a.css("marginTop"), 10)) / (m - l)]));
                          }),
                      e.on("mousewheel", function (b) {
                          var c = Math.abs(parseInt(a.css("marginTop"), 10)),
                              c = c - 20 * b.deltaY;
                          0 > c && (c = 0);
                          e.trigger("scroll_element.xdsoft_scroller", [c / (m - l)]);
                          b.stopPropagation();
                          return !1;
                      }),
                      e.on("touchstart", function (b) {
                          t = f(b);
                          h = Math.abs(parseInt(a.css("marginTop"), 10));
                      }),
                      e.on("touchmove", function (a) {
                          t && (a.preventDefault(), (a = f(a)), e.trigger("scroll_element.xdsoft_scroller", [(h - (a.y - t.y)) / (m - l)]));
                      }),
                      e.on("touchend touchcancel", function () {
                          t = !1;
                          h = 0;
                      })),
                  e.trigger("resize_scroll.xdsoft_scroller", [d]));
        });
    };
    b.fn.datetimepicker = function (c, d) {
        var f = this,
            l = !1,
            a = b.isPlainObject(c) || !c ? b.extend(!0, {}, t, c) : b.extend(!0, {}, t),
            m = 0,
            n,
            v,
            H = function (a) {
                a.on("open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart", function V() {
                    a.is(":disabled") ||
                        a.data("xdsoft_datetimepicker") ||
                        (clearTimeout(m),
                        (m = setTimeout(function () {
                            a.data("xdsoft_datetimepicker") || n(a);
                            a.off("open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart", V).trigger("open.xdsoft");
                        }, 100)));
                });
            };
        n = function (d) {
            function f() {
                var b = !1,
                    r;
                a.startDate
                    ? (b = k.strToDate(a.startDate))
                    : (b = a.value || (d && d.val && d.val() ? d.val() : ""))
                    ? ((b = k.strToDateTime(b)), a.yearOffset && (b = new Date(b.getFullYear() - a.yearOffset, b.getMonth(), b.getDate(), b.getHours(), b.getMinutes(), b.getSeconds(), b.getMilliseconds())))
                    : a.defaultDate && ((b = k.strToDateTime(a.defaultDate)), a.defaultTime && ((r = k.strtotime(a.defaultTime)), b.setHours(r.getHours()), b.setMinutes(r.getMinutes())));
                b && k.isValidDate(b) ? h.data("changed", !0) : (b = "");
                return b || 0;
            }
            function m(a) {
                var r = function (a, b) {
                        var g = a
                            .replace(/([\[\]\/\{\}\(\)\-\.\+]{1})/g, "\\$1")
                            .replace(/_/g, "{digit+}")
                            .replace(/([0-9]{1})/g, "{digit$1}")
                            .replace(/\{digit([0-9]{1})\}/g, "[0-$1_]{1}")
                            .replace(/\{digit[\+]\}/g, "[0-9_]{1}");
                        return new RegExp(g).test(b);
                    },
                    c = function (b, r) {
                        b = "string" === typeof b || b instanceof String ? a.ownerDocument.getElementById(b) : b;
                        if (!b) return !1;
                        if (b.createTextRange) {
                            var c = b.createTextRange();
                            c.collapse(!0);
                            c.moveEnd("character", r);
                            c.moveStart("character", r);
                            c.select();
                            return !0;
                        }
                        return b.setSelectionRange ? (b.setSelectionRange(r, r), !0) : !1;
                    };
                a.mask && d.off("keydown.xdsoft");
                !0 === a.mask && (a.mask = e.formatMask ? e.formatMask(a.format) : a.format.replace(/Y/g, "9999").replace(/F/g, "9999").replace(/m/g, "19").replace(/d/g, "39").replace(/H/g, "29").replace(/i/g, "59").replace(/s/g, "59"));
                "string" === b.type(a.mask) &&
                    (r(a.mask, d.val()) || (d.val(a.mask.replace(/[0-9]/g, "_")), c(d[0], 0)),
                    d.on("paste.xdsoft", function (e) {
                        var h = (e.clipboardData || e.originalEvent.clipboardData || window.clipboardData).getData("text"),
                            k = this.value,
                            f = this.selectionStart,
                            l = k.substr(0, f),
                            k = k.substr(f + h.length),
                            k = l + h + k,
                            f = f + h.length;
                        r(a.mask, k) ? ((this.value = k), c(this, f)) : "" === b.trim(k) ? (this.value = a.mask.replace(/[0-9]/g, "_")) : d.trigger("error_input.xdsoft");
                        e.preventDefault();
                        return !1;
                    }),
                    d.on("keydown.xdsoft", function (e) {
                        var h = this.value,
                            k = e.which,
                            f = this.selectionStart,
                            m = this.selectionEnd,
                            n = f !== m,
                            t;
                        if ((48 <= k && 57 >= k) || (96 <= k && 105 >= k) || 8 === k || 46 === k) {
                            t = 8 === k || 46 === k ? "_" : String.fromCharCode(96 <= k && 105 >= k ? k - 48 : k);
                            for (8 === k && f && !n && --f; ; ) {
                                var p = a.mask.substr(f, 1),
                                    u = f < a.mask.length,
                                    q = 0 < f;
                                if (!(/[^0-9_]/.test(p) && u && q)) break;
                                f += 8 !== k || n ? 1 : -1;
                            }
                            e.metaKey && ((f = 0), (n = !0));
                            if (n) {
                                var n = m - f,
                                    A = a.mask.replace(/[0-9]/g, "_"),
                                    p = A.substr(f, n).substr(1),
                                    m = h.substr(0, f);
                                t += p;
                                h = h.substr(f + n);
                            } else (m = h.substr(0, f)), (h = h.substr(f + 1));
                            h = m + t + h;
                            if ("" === b.trim(h)) h = A;
                            else if (f === a.mask.length) return e.preventDefault(), !1;
                            for (f += 8 === k ? 0 : 1; /[^0-9_]/.test(a.mask.substr(f, 1)) && f < a.mask.length && 0 < f; ) f += 8 === k ? 0 : 1;
                            r(a.mask, h) ? ((this.value = h), c(this, f)) : "" === b.trim(h) ? (this.value = a.mask.replace(/[0-9]/g, "_")) : d.trigger("error_input.xdsoft");
                        } else if ((-1 !== [65, 67, 86, 90, 89].indexOf(k) && l) || -1 !== [27, 38, 40, 37, 39, 116, 17, 9, 13].indexOf(k)) return !0;
                        e.preventDefault();
                        return !1;
                    }));
            }
            var h = b('<div class="xdsoft_datetimepicker xdsoft_noselect"></div>'),
                n = b('<div class="xdsoft_copyright"><a target="_blank" href="http://xdsoft.net/jqplugins/datetimepicker/">xdsoft.net</a></div>'),
                u = b('<div class="xdsoft_datepicker active"></div>'),
                t = b(
                    '<div class="xdsoft_monthpicker"><button type="button" class="xdsoft_prev"></button><button type="button" class="xdsoft_today_button"></button><div class="xdsoft_label xdsoft_month"><span></span><i></i></div><div class="xdsoft_label xdsoft_year"><span></span><i></i></div><button type="button" class="xdsoft_next"></button></div>'
                ),
                A = b('<div class="xdsoft_calendar"></div>'),
                v = b('<div class="xdsoft_timepicker active"><button type="button" class="xdsoft_prev"></button><div class="xdsoft_time_box"></div><button type="button" class="xdsoft_next"></button></div>'),
                q = v.find(".xdsoft_time_box").eq(0),
                y = b('<div class="xdsoft_time_variant"></div>'),
                B = b('<button type="button" class="xdsoft_save_selected blue-gradient-button">Save Selected</button>'),
                H = b('<div class="xdsoft_select xdsoft_monthselect"><div></div></div>'),
                R = b('<div class="xdsoft_select xdsoft_yearselect"><div></div></div>'),
                I = !1,
                S,
                G,
                E,
                J,
                T = 0,
                k,
                U;
            a.id && h.attr("id", a.id);
            a.style && h.attr("style", a.style);
            a.weeks && h.addClass("xdsoft_showweeks");
            a.rtl && h.addClass("xdsoft_rtl");
            h.addClass("xdsoft_" + a.theme);
            h.addClass(a.className);
            t.find(".xdsoft_month span").after(H);
            t.find(".xdsoft_year span").after(R);
            t.find(".xdsoft_month,.xdsoft_year").on("touchstart mousedown.xdsoft", function (g) {
                var r = b(this).find(".xdsoft_select").eq(0),
                    c = 0,
                    d = 0,
                    e = r.is(":visible"),
                    h;
                t.find(".xdsoft_select").hide();
                k.currentTime && (c = k.currentTime[b(this).hasClass("xdsoft_month") ? "getMonth" : "getFullYear"]());
                r[e ? "hide" : "show"]();
                e = r.find("div.xdsoft_option");
                for (h = 0; h < e.length && e.eq(h).data("value") !== c; h += 1) d += e[0].offsetHeight;
                r.xdsoftScroller(a, d / (r.children()[0].offsetHeight - r[0].clientHeight));
                g.stopPropagation();
                return !1;
            });
            var K = function (b) {
                b = b.originalEvent;
                var r = b.touches ? b.touches[0] : b;
                this.touchStartPosition = this.touchStartPosition || r;
                b = Math.abs(this.touchStartPosition.clientX - r.clientX);
                r = Math.abs(this.touchStartPosition.clientY - r.clientY);
                Math.sqrt(b * b + r * r) > a.touchMovedThreshold && (this.touchMoved = !0);
            };
            t.find(".xdsoft_select")
                .xdsoftScroller(a)
                .on("touchstart mousedown.xdsoft", function (a) {
                    var b = a.originalEvent;
                    this.touchMoved = !1;
                    this.touchStartPosition = b.touches ? b.touches[0] : b;
                    a.stopPropagation();
                    a.preventDefault();
                })
                .on("touchmove", ".xdsoft_option", K)
                .on("touchend mousedown.xdsoft", ".xdsoft_option", function () {
                    if (!this.touchMoved) {
                        if (void 0 === k.currentTime || null === k.currentTime) k.currentTime = k.now();
                        var g = k.currentTime.getFullYear();
                        if (k && k.currentTime) k.currentTime[b(this).parent().parent().hasClass("xdsoft_monthselect") ? "setMonth" : "setFullYear"](b(this).data("value"));
                        b(this).parent().parent().hide();
                        h.trigger("xchange.xdsoft");
                        a.onChangeMonth && b.isFunction(a.onChangeMonth) && a.onChangeMonth.call(h, k.currentTime, h.data("input"));
                        g !== k.currentTime.getFullYear() && b.isFunction(a.onChangeYear) && a.onChangeYear.call(h, k.currentTime, h.data("input"));
                    }
                });
            h.getValue = function () {
                return k.getCurrentTime();
            };
            h.setOptions = function (g) {
                var r = {};
                a = b.extend(!0, {}, a, g);
                g.allowTimes && b.isArray(g.allowTimes) && g.allowTimes.length && (a.allowTimes = b.extend(!0, [], g.allowTimes));
                g.weekends && b.isArray(g.weekends) && g.weekends.length && (a.weekends = b.extend(!0, [], g.weekends));
                g.allowDates && b.isArray(g.allowDates) && g.allowDates.length && (a.allowDates = b.extend(!0, [], g.allowDates));
                g.allowDateRe && "[object String]" === Object.prototype.toString.call(g.allowDateRe) && (a.allowDateRe = new RegExp(g.allowDateRe));
                g.highlightedDates &&
                    b.isArray(g.highlightedDates) &&
                    g.highlightedDates.length &&
                    (b.each(g.highlightedDates, function (g, c) {
                        var d = b.map(c.split(","), b.trim),
                            h = new p(e.parseDate(d[0], a.formatDate), d[1], d[2]),
                            k = e.formatDate(h.date, a.formatDate);
                        void 0 !== r[k] ? (d = r[k].desc) && d.length && h.desc && h.desc.length && (r[k].desc = d + "\n" + h.desc) : (r[k] = h);
                    }),
                    (a.highlightedDates = b.extend(!0, [], r)));
                g.highlightedPeriods &&
                    b.isArray(g.highlightedPeriods) &&
                    g.highlightedPeriods.length &&
                    ((r = b.extend(!0, [], a.highlightedDates)),
                    b.each(g.highlightedPeriods, function (g, c) {
                        var d, h, k, f, l, m, n;
                        b.isArray(c) ? ((d = c[0]), (h = c[1]), (k = c[2]), (n = c[3])) : ((f = b.map(c.split(","), b.trim)), (d = e.parseDate(f[0], a.formatDate)), (h = e.parseDate(f[1], a.formatDate)), (k = f[2]), (n = f[3]));
                        for (; d <= h; )
                            (f = new p(d, k, n)), (l = e.formatDate(d, a.formatDate)), d.setDate(d.getDate() + 1), void 0 !== r[l] ? (m = r[l].desc) && m.length && f.desc && f.desc.length && (r[l].desc = m + "\n" + f.desc) : (r[l] = f);
                    }),
                    (a.highlightedDates = b.extend(!0, [], r)));
                g.disabledDates && b.isArray(g.disabledDates) && g.disabledDates.length && (a.disabledDates = b.extend(!0, [], g.disabledDates));
                g.disabledWeekDays && b.isArray(g.disabledWeekDays) && g.disabledWeekDays.length && (a.disabledWeekDays = b.extend(!0, [], g.disabledWeekDays));
                (!a.open && !a.opened) || a.inline || d.trigger("open.xdsoft");
                a.inline && ((I = !0), h.addClass("xdsoft_inline"), d.after(h).hide());
                a.inverseButton && ((a.next = "xdsoft_prev"), (a.prev = "xdsoft_next"));
                a.datepicker ? u.addClass("active") : u.removeClass("active");
                a.timepicker ? v.addClass("active") : v.removeClass("active");
                a.value && (k.setCurrentTime(a.value), d && d.val && d.val(k.str));
                isNaN(a.dayOfWeekStart) ? (a.dayOfWeekStart = 0) : (a.dayOfWeekStart = parseInt(a.dayOfWeekStart, 10) % 7);
                a.timepickerScrollbar || q.xdsoftScroller(a, "hide");
                a.minDate && /^[\+\-](.*)$/.test(a.minDate) && (a.minDate = e.formatDate(k.strToDateTime(a.minDate), a.formatDate));
                a.maxDate && /^[\+\-](.*)$/.test(a.maxDate) && (a.maxDate = e.formatDate(k.strToDateTime(a.maxDate), a.formatDate));
                a.minDateTime && /^\+(.*)$/.test(a.minDateTime) && (a.minDateTime = k.strToDateTime(a.minDateTime).dateFormat(a.formatDate));
                a.maxDateTime && /^\+(.*)$/.test(a.maxDateTime) && (a.maxDateTime = k.strToDateTime(a.maxDateTime).dateFormat(a.formatDate));
                B.toggle(a.showApplyButton);
                t.find(".xdsoft_today_button").css("visibility", a.todayButton ? "visible" : "hidden");
                t.find("." + a.prev).css("visibility", a.prevButton ? "visible" : "hidden");
                t.find("." + a.next).css("visibility", a.nextButton ? "visible" : "hidden");
                m(a);
                if (a.validateOnBlur)
                    d.off("blur.xdsoft").on("blur.xdsoft", function () {
                        if (a.allowBlank && (!b.trim(b(this).val()).length || ("string" === typeof a.mask && b.trim(b(this).val()) === a.mask.replace(/[0-9]/g, "_")))) b(this).val(null), h.data("xdsoft_datetime").empty();
                        else {
                            var r = e.parseDate(b(this).val(), a.format);
                            if (r) b(this).val(e.formatDate(r, a.format));
                            else {
                                var r = +[b(this).val()[0], b(this).val()[1]].join(""),
                                    g = +[b(this).val()[2], b(this).val()[3]].join("");
                                !a.datepicker && a.timepicker && 0 <= r && 24 > r && 0 <= g && 60 > g
                                    ? b(this).val(
                                          [r, g]
                                              .map(function (a) {
                                                  return 9 < a ? a : "0" + a;
                                              })
                                              .join(":")
                                      )
                                    : b(this).val(e.formatDate(k.now(), a.format));
                            }
                            h.data("xdsoft_datetime").setCurrentTime(b(this).val());
                        }
                        h.trigger("changedatetime.xdsoft");
                        h.trigger("close.xdsoft");
                    });
                a.dayOfWeekStartPrev = 0 === a.dayOfWeekStart ? 6 : a.dayOfWeekStart - 1;
                h.trigger("xchange.xdsoft").trigger("afterOpen.xdsoft");
            };
            h.data("options", a).on("touchstart mousedown.xdsoft", function (a) {
                a.stopPropagation();
                a.preventDefault();
                R.hide();
                H.hide();
                return !1;
            });
            q.append(y);
            q.xdsoftScroller(a);
            h.on("afterOpen.xdsoft", function () {
                q.xdsoftScroller(a);
            });
            h.append(u).append(v);
            !0 !== a.withoutCopyright && h.append(n);
            u.append(t).append(A).append(B);
            a.insideParent ? b(d).parent().append(h) : b(a.parentID).append(h);
            k = new (function () {
                var g = this;
                g.now = function (b) {
                    var c = new Date(),
                        d;
                    !b && a.defaultDate && ((d = g.strToDateTime(a.defaultDate)), c.setFullYear(d.getFullYear()), c.setMonth(d.getMonth()), c.setDate(d.getDate()));
                    c.setFullYear(c.getFullYear());
                    !b && a.defaultTime && ((b = g.strtotime(a.defaultTime)), c.setHours(b.getHours()), c.setMinutes(b.getMinutes()), c.setSeconds(b.getSeconds()), c.setMilliseconds(b.getMilliseconds()));
                    return c;
                };
                g.isValidDate = function (a) {
                    return "[object Date]" !== Object.prototype.toString.call(a) ? !1 : !isNaN(a.getTime());
                };
                g.setCurrentTime = function (b, c) {
                    "string" === typeof b ? (g.currentTime = g.strToDateTime(b)) : g.isValidDate(b) ? (g.currentTime = b) : (g.currentTime = b || c || !a.allowBlank || a.inline ? g.now() : null);
                    h.trigger("xchange.xdsoft");
                };
                g.empty = function () {
                    g.currentTime = null;
                };
                g.getCurrentTime = function () {
                    return g.currentTime;
                };
                g.nextMonth = function () {
                    if (void 0 === g.currentTime || null === g.currentTime) g.currentTime = g.now();
                    var c = g.currentTime.getMonth() + 1,
                        d;
                    12 === c && (g.currentTime.setFullYear(g.currentTime.getFullYear() + 1), (c = 0));
                    d = g.currentTime.getFullYear();
                    g.currentTime.setDate(Math.min(new Date(g.currentTime.getFullYear(), c + 1, 0).getDate(), g.currentTime.getDate()));
                    g.currentTime.setMonth(c);
                    a.onChangeMonth && b.isFunction(a.onChangeMonth) && a.onChangeMonth.call(h, k.currentTime, h.data("input"));
                    d !== g.currentTime.getFullYear() && b.isFunction(a.onChangeYear) && a.onChangeYear.call(h, k.currentTime, h.data("input"));
                    h.trigger("xchange.xdsoft");
                    return c;
                };
                g.prevMonth = function () {
                    if (void 0 === g.currentTime || null === g.currentTime) g.currentTime = g.now();
                    var c = g.currentTime.getMonth() - 1;
                    -1 === c && (g.currentTime.setFullYear(g.currentTime.getFullYear() - 1), (c = 11));
                    g.currentTime.setDate(Math.min(new Date(g.currentTime.getFullYear(), c + 1, 0).getDate(), g.currentTime.getDate()));
                    g.currentTime.setMonth(c);
                    a.onChangeMonth && b.isFunction(a.onChangeMonth) && a.onChangeMonth.call(h, k.currentTime, h.data("input"));
                    h.trigger("xchange.xdsoft");
                    return c;
                };
                g.getWeekOfYear = function (c) {
                    if (a.onGetWeekOfYear && b.isFunction(a.onGetWeekOfYear)) {
                        var g = a.onGetWeekOfYear.call(h, c);
                        if ("undefined" !== typeof g) return g;
                    }
                    g = new Date(c.getFullYear(), 0, 1);
                    4 !== g.getDay() && g.setMonth(0, 1 + ((4 - g.getDay() + 7) % 7));
                    return Math.ceil(((c - g) / 864e5 + g.getDay() + 1) / 7);
                };
                g.strToDateTime = function (b) {
                    var c = [];
                    if (b && b instanceof Date && g.isValidDate(b)) return b;
                    (c = /^([+-]{1})(.*)$/.exec(b)) && (c[2] = e.parseDate(c[2], a.formatDate));
                    c && c[2] ? ((b = c[2].getTime() - 6e4 * c[2].getTimezoneOffset()), (c = new Date(g.now(!0).getTime() + parseInt(c[1] + "1", 10) * b))) : (c = b ? e.parseDate(b, a.format) : g.now());
                    g.isValidDate(c) || (c = g.now());
                    return c;
                };
                g.strToDate = function (b) {
                    if (b && b instanceof Date && g.isValidDate(b)) return b;
                    b = b ? e.parseDate(b, a.formatDate) : g.now(!0);
                    g.isValidDate(b) || (b = g.now(!0));
                    return b;
                };
                g.strtotime = function (b) {
                    if (b && b instanceof Date && g.isValidDate(b)) return b;
                    b = b ? e.parseDate(b, a.formatTime) : g.now(!0);
                    g.isValidDate(b) || (b = g.now(!0));
                    return b;
                };
                g.str = function () {
                    var b = a.format;
                    a.yearOffset && ((b = b.replace("Y", g.currentTime.getFullYear() + a.yearOffset)), (b = b.replace("y", String(g.currentTime.getFullYear() + a.yearOffset).substring(2, 4))));
                    return e.formatDate(g.currentTime, b);
                };
                g.currentTime = this.now();
            })();
            B.on("touchend click", function (a) {
                a.preventDefault();
                h.data("changed", !0);
                k.setCurrentTime(f());
                d.val(k.str());
                h.trigger("close.xdsoft");
            });
            t.find(".xdsoft_today_button")
                .on("touchend mousedown.xdsoft", function () {
                    h.data("changed", !0);
                    k.setCurrentTime(0, !0);
                    h.trigger("afterOpen.xdsoft");
                })
                .on("dblclick.xdsoft", function () {
                    var b = k.getCurrentTime(),
                        c,
                        b = new Date(b.getFullYear(), b.getMonth(), b.getDate());
                    c = k.strToDate(a.minDate);
                    c = new Date(c.getFullYear(), c.getMonth(), c.getDate());
                    b < c || ((c = k.strToDate(a.maxDate)), (c = new Date(c.getFullYear(), c.getMonth(), c.getDate())), b > c || (d.val(k.str()), d.trigger("change"), h.trigger("close.xdsoft")));
                });
            t.find(".xdsoft_prev,.xdsoft_next").on("touchend mousedown.xdsoft", function () {
                var c = b(this),
                    d = 0,
                    h = !1;
                (function X(b) {
                    c.hasClass(a.next) ? k.nextMonth() : c.hasClass(a.prev) && k.prevMonth();
                    a.monthChangeSpinner && (h || (d = setTimeout(X, b || 100)));
                })(500);
                b([a.ownerDocument.body, a.contentWindow]).on("touchend mouseup.xdsoft", function Q() {
                    clearTimeout(d);
                    h = !0;
                    b([a.ownerDocument.body, a.contentWindow]).off("touchend mouseup.xdsoft", Q);
                });
            });
            v.find(".xdsoft_prev,.xdsoft_next").on("touchend mousedown.xdsoft", function () {
                var c = b(this),
                    d = 0,
                    h = !1,
                    e = 110;
                (function Q(b) {
                    var k = q[0].clientHeight,
                        f = y[0].offsetHeight,
                        l = Math.abs(parseInt(y.css("marginTop"), 10));
                    c.hasClass(a.next) && f - k - a.timeHeightInTimePicker >= l
                        ? y.css("marginTop", "-" + (l + a.timeHeightInTimePicker) + "px")
                        : c.hasClass(a.prev) && 0 <= l - a.timeHeightInTimePicker && y.css("marginTop", "-" + (l - a.timeHeightInTimePicker) + "px");
                    q.trigger("scroll_element.xdsoft_scroller", [Math.abs(parseInt(y[0].style.marginTop, 10) / (f - k))]);
                    e = 10 < e ? 10 : e - 10;
                    h || (d = setTimeout(Q, b || e));
                })(500);
                b([a.ownerDocument.body, a.contentWindow]).on("touchend mouseup.xdsoft", function Y() {
                    clearTimeout(d);
                    h = !0;
                    b([a.ownerDocument.body, a.contentWindow]).off("touchend mouseup.xdsoft", Y);
                });
            });
            S = 0;
            h.on("xchange.xdsoft", function (g) {
                clearTimeout(S);
                S = setTimeout(function () {
                    if (void 0 === k.currentTime || null === k.currentTime) k.currentTime = k.now();
                    for (
                        var g = "", f = new Date(k.currentTime.getFullYear(), k.currentTime.getMonth(), 1, 12, 0, 0), l = 0, m, n = k.now(), p = !1, w = !1, u = !1, q = !1, v, B, z, E, x = [], F, K = !0, G = "", I;
                        f.getDay() !== a.dayOfWeekStart;

                    )
                        f.setDate(f.getDate() - 1);
                    g += "<table><thead><tr>";
                    a.weeks && (g += "<th></th>");
                    for (m = 0; 7 > m; m += 1) g += "<th>" + a.i18n[C].dayOfWeekShort[(m + a.dayOfWeekStart) % 7] + "</th>";
                    g += "</tr></thead><tbody>";
                    !1 !== a.maxDate && ((p = k.strToDate(a.maxDate)), (p = new Date(p.getFullYear(), p.getMonth(), p.getDate(), 23, 59, 59, 999)));
                    !1 !== a.minDate && ((w = k.strToDate(a.minDate)), (w = new Date(w.getFullYear(), w.getMonth(), w.getDate())));
                    !1 !== a.minDateTime && ((u = k.strToDate(a.minDateTime)), (u = new Date(u.getFullYear(), u.getMonth(), u.getDate(), u.getHours(), u.getMinutes(), u.getSeconds())));
                    !1 !== a.maxDateTime && ((q = k.strToDate(a.maxDateTime)), (q = new Date(q.getFullYear(), q.getMonth(), q.getDate(), q.getHours(), q.getMinutes(), q.getSeconds())));
                    var J;
                    for (!1 !== q && (J = 31 * (12 * q.getFullYear() + q.getMonth()) + q.getDate()); l < k.currentTime.countDaysInMonth() || f.getDay() !== a.dayOfWeekStart || k.currentTime.getMonth() === f.getMonth(); ) {
                        x = [];
                        l += 1;
                        v = f.getDay();
                        m = f.getDate();
                        B = f.getFullYear();
                        z = f.getMonth();
                        E = k.getWeekOfYear(f);
                        I = "";
                        x.push("xdsoft_date");
                        F = a.beforeShowDay && b.isFunction(a.beforeShowDay.call) ? a.beforeShowDay.call(h, f) : null;
                        a.allowDateRe && "[object RegExp]" === Object.prototype.toString.call(a.allowDateRe) && (a.allowDateRe.test(e.formatDate(f, a.formatDate)) || x.push("xdsoft_disabled"));
                        a.allowDates && 0 < a.allowDates.length && -1 === a.allowDates.indexOf(e.formatDate(f, a.formatDate)) && x.push("xdsoft_disabled");
                        var L = 31 * (12 * f.getFullYear() + f.getMonth()) + f.getDate();
                        ((!1 !== p && f > p) || (!1 !== u && f < u) || (!1 !== w && f < w) || (!1 !== q && L > J) || (F && !1 === F[0])) && x.push("xdsoft_disabled");
                        -1 !== a.disabledDates.indexOf(e.formatDate(f, a.formatDate)) && x.push("xdsoft_disabled");
                        -1 !== a.disabledWeekDays.indexOf(v) && x.push("xdsoft_disabled");
                        d.is("[disabled]") && x.push("xdsoft_disabled");
                        F && "" !== F[1] && x.push(F[1]);
                        k.currentTime.getMonth() !== z && x.push("xdsoft_other_month");
                        (a.defaultSelect || h.data("changed")) && e.formatDate(k.currentTime, a.formatDate) === e.formatDate(f, a.formatDate) && x.push("xdsoft_current");
                        e.formatDate(n, a.formatDate) === e.formatDate(f, a.formatDate) && x.push("xdsoft_today");
                        (0 !== f.getDay() && 6 !== f.getDay() && -1 === a.weekends.indexOf(e.formatDate(f, a.formatDate))) || x.push("xdsoft_weekend");
                        void 0 !== a.highlightedDates[e.formatDate(f, a.formatDate)] &&
                            ((v = a.highlightedDates[e.formatDate(f, a.formatDate)]), x.push(void 0 === v.style ? "xdsoft_highlighted_default" : v.style), (I = void 0 === v.desc ? "" : v.desc));
                        a.beforeShowDay && b.isFunction(a.beforeShowDay) && x.push(a.beforeShowDay(f));
                        K && ((g += "<tr>"), (K = !1), a.weeks && (g += "<th>" + E + "</th>"));
                        g += '<td data-date="' + m + '" data-month="' + z + '" data-year="' + B + '" class="xdsoft_date xdsoft_day_of_week' + f.getDay() + " " + x.join(" ") + '" title="' + I + '"><div>' + m + "</div></td>";
                        f.getDay() === a.dayOfWeekStartPrev && ((g += "</tr>"), (K = !0));
                        f.setDate(m + 1);
                    }
                    g += "</tbody></table>";
                    A.html(g);
                    t.find(".xdsoft_label span").eq(0).text(a.i18n[C].months[k.currentTime.getMonth()]);
                    t.find(".xdsoft_label span")
                        .eq(1)
                        .text(k.currentTime.getFullYear() + a.yearOffset);
                    z = f = G = "";
                    var M = 0;
                    !1 !== a.minTime && ((l = k.strtotime(a.minTime)), (M = 60 * l.getHours() + l.getMinutes()));
                    var N = 1440;
                    !1 !== a.maxTime && ((l = k.strtotime(a.maxTime)), (N = 60 * l.getHours() + l.getMinutes()));
                    !1 !== a.minDateTime && ((l = k.strToDateTime(a.minDateTime)), e.formatDate(k.currentTime, a.formatDate) === e.formatDate(l, a.formatDate) && ((z = 60 * l.getHours() + l.getMinutes()), z > M && (M = z)));
                    !1 !== a.maxDateTime && ((l = k.strToDateTime(a.maxDateTime)), e.formatDate(k.currentTime, a.formatDate) === e.formatDate(l, a.formatDate) && ((z = 60 * l.getHours() + l.getMinutes()), z < N && (N = z)));
                    g = function (c, g) {
                        var f = k.now(),
                            l,
                            r = a.allowTimes && b.isArray(a.allowTimes) && a.allowTimes.length;
                        f.setHours(c);
                        c = parseInt(f.getHours(), 10);
                        f.setMinutes(g);
                        g = parseInt(f.getMinutes(), 10);
                        x = [];
                        l = 60 * c + g;
                        (d.is("[disabled]") || l >= N || l < M) && x.push("xdsoft_disabled");
                        l = new Date(k.currentTime);
                        l.setHours(parseInt(k.currentTime.getHours(), 10));
                        r || l.setMinutes(Math[a.roundTime](k.currentTime.getMinutes() / a.step) * a.step);
                        (a.initTime || a.defaultSelect || h.data("changed")) &&
                            l.getHours() === parseInt(c, 10) &&
                            ((!r && 59 < a.step) || l.getMinutes() === parseInt(g, 10)) &&
                            (a.defaultSelect || h.data("changed") ? x.push("xdsoft_current") : a.initTime && x.push("xdsoft_init_time"));
                        parseInt(n.getHours(), 10) === parseInt(c, 10) && parseInt(n.getMinutes(), 10) === parseInt(g, 10) && x.push("xdsoft_today");
                        G += '<div class="xdsoft_time ' + x.join(" ") + '" data-hour="' + c + '" data-minute="' + g + '">' + e.formatDate(f, a.formatTime) + "</div>";
                    };
                    if (a.allowTimes && b.isArray(a.allowTimes) && a.allowTimes.length) for (l = 0; l < a.allowTimes.length; l += 1) (f = k.strtotime(a.allowTimes[l]).getHours()), (z = k.strtotime(a.allowTimes[l]).getMinutes()), g(f, z);
                    else for (m = l = 0; l < (a.hours12 ? 12 : 24); l += 1) for (m = 0; 60 > m; m += a.step) (z = 60 * l + m), z < M || z >= N || ((f = (10 > l ? "0" : "") + l), (z = (10 > m ? "0" : "") + m), g(f, z));
                    y.html(G);
                    c = "";
                    for (l = parseInt(a.yearStart, 10); l <= parseInt(a.yearEnd, 10); l += 1)
                        c += '<div class="xdsoft_option ' + (k.currentTime.getFullYear() === l ? "xdsoft_current" : "") + '" data-value="' + l + '">' + (l + a.yearOffset) + "</div>";
                    R.children().eq(0).html(c);
                    l = parseInt(a.monthStart, 10);
                    for (c = ""; l <= parseInt(a.monthEnd, 10); l += 1) c += '<div class="xdsoft_option ' + (k.currentTime.getMonth() === l ? "xdsoft_current" : "") + '" data-value="' + l + '">' + a.i18n[C].months[l] + "</div>";
                    H.children().eq(0).html(c);
                    b(h).trigger("generate.xdsoft");
                }, 10);
                g.stopPropagation();
            }).on("afterOpen.xdsoft", function () {
                if (a.timepicker) {
                    var b, c, d;
                    y.find(".xdsoft_current").length ? (b = ".xdsoft_current") : y.find(".xdsoft_init_time").length && (b = ".xdsoft_init_time");
                    b
                        ? ((c = q[0].clientHeight), (d = y[0].offsetHeight), (b = y.find(b).index() * a.timeHeightInTimePicker + 1), d - c < b && (b = d - c), q.trigger("scroll_element.xdsoft_scroller", [parseInt(b, 10) / (d - c)]))
                        : q.trigger("scroll_element.xdsoft_scroller", [0]);
                }
            });
            G = 0;
            A.on("touchend click.xdsoft", "td", function (c) {
                c.stopPropagation();
                G += 1;
                var f = b(this),
                    e = k.currentTime;
                if (void 0 === e || null === e) (k.currentTime = k.now()), (e = k.currentTime);
                if (f.hasClass("xdsoft_disabled")) return !1;
                e.setDate(1);
                e.setFullYear(f.data("year"));
                e.setMonth(f.data("month"));
                e.setDate(f.data("date"));
                h.trigger("select.xdsoft", [e]);
                d.val(k.str());
                a.onSelectDate && b.isFunction(a.onSelectDate) && a.onSelectDate.call(h, k.currentTime, h.data("input"), c);
                h.data("changed", !0);
                h.trigger("xchange.xdsoft");
                h.trigger("changedatetime.xdsoft");
                (1 < G || !0 === a.closeOnDateSelect || (!1 === a.closeOnDateSelect && !a.timepicker)) && !a.inline && h.trigger("close.xdsoft");
                setTimeout(function () {
                    G = 0;
                }, 200);
            });
            y.on("touchstart", "div", function (a) {
                this.touchMoved = !1;
            })
                .on("touchmove", "div", K)
                .on("touchend click.xdsoft", "div", function (c) {
                    if (!this.touchMoved) {
                        c.stopPropagation();
                        var d = b(this),
                            f = k.currentTime;
                        if (void 0 === f || null === f) (k.currentTime = k.now()), (f = k.currentTime);
                        if (d.hasClass("xdsoft_disabled")) return !1;
                        f.setHours(d.data("hour"));
                        f.setMinutes(d.data("minute"));
                        h.trigger("select.xdsoft", [f]);
                        h.data("input").val(k.str());
                        a.onSelectTime && b.isFunction(a.onSelectTime) && a.onSelectTime.call(h, k.currentTime, h.data("input"), c);
                        h.data("changed", !0);
                        h.trigger("xchange.xdsoft");
                        h.trigger("changedatetime.xdsoft");
                        !0 !== a.inline && !0 === a.closeOnTimeSelect && h.trigger("close.xdsoft");
                    }
                });
            u.on("mousewheel.xdsoft", function (b) {
                if (!a.scrollMonth) return !0;
                0 > b.deltaY ? k.nextMonth() : k.prevMonth();
                return !1;
            });
            d.on("mousewheel.xdsoft", function (b) {
                if (!a.scrollInput) return !0;
                if (!a.datepicker && a.timepicker)
                    return (
                        (E = y.find(".xdsoft_current").length ? y.find(".xdsoft_current").eq(0).index() : 0),
                        0 <= E + b.deltaY && E + b.deltaY < y.children().length && (E += b.deltaY),
                        y.children().eq(E).length && y.children().eq(E).trigger("mousedown"),
                        !1
                    );
                if (a.datepicker && !a.timepicker) return u.trigger(b, [b.deltaY, b.deltaX, b.deltaY]), d.val && d.val(k.str()), h.trigger("changedatetime.xdsoft"), !1;
            });
            h.on("changedatetime.xdsoft", function (c) {
                if (a.onChangeDateTime && b.isFunction(a.onChangeDateTime)) {
                    var d = h.data("input");
                    a.onChangeDateTime.call(h, k.currentTime, d, c);
                    delete a.value;
                    d.trigger("change");
                }
            })
                .on("generate.xdsoft", function () {
                    a.onGenerate && b.isFunction(a.onGenerate) && a.onGenerate.call(h, k.currentTime, h.data("input"));
                    I && (h.trigger("afterOpen.xdsoft"), (I = !1));
                })
                .on("click.xdsoft", function (a) {
                    a.stopPropagation();
                });
            E = 0;
            U = function (a, b) {
                do if (((a = a.parentNode), !a || !1 === b(a))) break;
                while ("HTML" !== a.nodeName);
            };
            J = function () {
                var c, d, f, e, k, l, m, n, p, w, q;
                m = h.data("input");
                c = m.offset();
                d = m[0];
                p = "top";
                f = c.top + d.offsetHeight - 1;
                e = c.left;
                k = "absolute";
                n = b(a.contentWindow).width();
                w = b(a.contentWindow).height();
                q = b(a.contentWindow).scrollTop();
                if (a.ownerDocument.documentElement.clientWidth - c.left < u.parent().outerWidth(!0)) {
                    var t = u.parent().outerWidth(!0) - d.offsetWidth;
                    e -= t;
                }
                "rtl" === m.parent().css("direction") && (e -= h.outerWidth() - m.outerWidth());
                a.fixed
                    ? ((f -= q), (e -= b(a.contentWindow).scrollLeft()), (k = "fixed"))
                    : ((l = !1),
                      U(d, function (b) {
                          if (null === b) return !1;
                          if ("fixed" === a.contentWindow.getComputedStyle(b).getPropertyValue("position")) return (l = !0), !1;
                      }),
                      l && !a.insideParent ? ((k = "fixed"), f + h.outerHeight() > w + q ? ((p = "bottom"), (f = w + q - c.top)) : (f -= q)) : f + h[0].offsetHeight > w + q && (f = c.top - h[0].offsetHeight + 1),
                      0 > f && (f = 0),
                      e + d.offsetWidth > n && (e = n - d.offsetWidth));
                U(h[0], function (b) {
                    if ("relative" === a.contentWindow.getComputedStyle(b).getPropertyValue("position") && n >= b.offsetWidth) return (e -= (n - b.offsetWidth) / 2), !1;
                });
                c = { position: k, left: a.insideParent ? d.offsetLeft : e, top: "", bottom: "" };
                c[p] = a.insideParent ? d.offsetTop + d.offsetHeight : f;
                h.css(c);
            };
            h.on("open.xdsoft", function (c) {
                var d = !0;
                a.onShow && b.isFunction(a.onShow) && (d = a.onShow.call(h, k.currentTime, h.data("input"), c));
                if (!1 !== d && (h.show(), J(), b(a.contentWindow).off("resize.xdsoft", J).on("resize.xdsoft", J), a.closeOnWithoutClick))
                    b([a.ownerDocument.body, a.contentWindow]).on("touchstart mousedown.xdsoft", function W() {
                        h.trigger("close.xdsoft");
                        b([a.ownerDocument.body, a.contentWindow]).off("touchstart mousedown.xdsoft", W);
                    });
            })
                .on("close.xdsoft", function (c) {
                    var d = !0;
                    t.find(".xdsoft_month,.xdsoft_year").find(".xdsoft_select").hide();
                    a.onClose && b.isFunction(a.onClose) && (d = a.onClose.call(h, k.currentTime, h.data("input"), c));
                    !1 === d || a.opened || a.inline || h.hide();
                    c.stopPropagation();
                })
                .on("toggle.xdsoft", function () {
                    h.is(":visible") ? h.trigger("close.xdsoft") : h.trigger("open.xdsoft");
                })
                .data("input", d);
            T = 0;
            h.data("xdsoft_datetime", k);
            h.setOptions(a);
            k.setCurrentTime(f());
            d.data("xdsoft_datetimepicker", h)
                .on("open.xdsoft focusin.xdsoft mousedown.xdsoft touchstart", function () {
                    d.is(":disabled") ||
                        (d.data("xdsoft_datetimepicker").is(":visible") && a.closeOnInputClick) ||
                        !a.openOnFocus ||
                        (clearTimeout(T),
                        (T = setTimeout(function () {
                            d.is(":disabled") || ((I = !0), k.setCurrentTime(f(), !0), a.mask && m(a), h.trigger("open.xdsoft"));
                        }, 100)));
                })
                .on("keydown.xdsoft", function (c) {
                    c = c.which;
                    if (-1 !== [13].indexOf(c) && a.enterLikeTab) return (c = b("input:visible,textarea:visible,button:visible,a:visible")), h.trigger("close.xdsoft"), c.eq(c.index(this) + 1).focus(), !1;
                    if (-1 !== [9].indexOf(c)) return h.trigger("close.xdsoft"), !0;
                })
                .on("blur.xdsoft", function () {
                    h.trigger("close.xdsoft");
                });
        };
        v = function (c) {
            var d = c.data("xdsoft_datetimepicker");
            d &&
                (d.data("xdsoft_datetime", null),
                d.remove(),
                c.data("xdsoft_datetimepicker", null).off(".xdsoft"),
                b(a.contentWindow).off("resize.xdsoft"),
                b([a.contentWindow, a.ownerDocument.body]).off("mousedown.xdsoft touchstart"),
                c.unmousewheel && c.unmousewheel());
        };
        b(a.ownerDocument)
            .off("keydown.xdsoftctrl keyup.xdsoftctrl")
            .off("keydown.xdsoftcmd keyup.xdsoftcmd")
            .on("keydown.xdsoftctrl", function (a) {
                17 === a.keyCode && (l = !0);
            })
            .on("keyup.xdsoftctrl", function (a) {
                17 === a.keyCode && (l = !1);
            })
            .on("keydown.xdsoftcmd", function (a) {})
            .on("keyup.xdsoftcmd", function (a) {});
        this.each(function () {
            var l = b(this).data("xdsoft_datetimepicker");
            if (l) {
                if ("string" === b.type(c))
                    switch (c) {
                        case "show":
                            b(this).select().focus();
                            l.trigger("open.xdsoft");
                            break;
                        case "hide":
                            l.trigger("close.xdsoft");
                            break;
                        case "toggle":
                            l.trigger("toggle.xdsoft");
                            break;
                        case "destroy":
                            v(b(this));
                            break;
                        case "reset":
                            ((this.value = this.defaultValue) && l.data("xdsoft_datetime").isValidDate(e.parseDate(this.value, a.format))) || l.data("changed", !1);
                            l.data("xdsoft_datetime").setCurrentTime(this.value);
                            break;
                        case "validate":
                            l = l.data("input");
                            l.trigger("blur.xdsoft");
                            break;
                        default:
                            l[c] && b.isFunction(l[c]) && (f = l[c](d));
                    }
                else l.setOptions(c);
                return 0;
            }
            "string" !== b.type(c) && (!a.lazyInit || a.open || a.inline ? n(b(this)) : H(b(this)));
        });
        return f;
    };
    b.fn.datetimepicker.defaults = t;
};
(function (b) {
    "function" === typeof define && define.amd ? define(["jquery", "jquery-mousewheel"], b) : "object" === typeof exports ? (module.exports = b(require("jquery"))) : b(jQuery);
})(datetimepickerFactory);
(function (b) {
    "function" === typeof define && define.amd ? define(["jquery"], b) : "object" === typeof exports ? (module.exports = b) : b(jQuery);
})(function (b) {
    function p(f) {
        var c = f || window.event,
            e = C.call(arguments, 1),
            n = 0,
            p = 0,
            a = 0,
            q = 0,
            v = 0,
            B = 0;
        f = b.event.fix(c);
        f.type = "mousewheel";
        "detail" in c && (a = -1 * c.detail);
        "wheelDelta" in c && (a = c.wheelDelta);
        "wheelDeltaY" in c && (a = c.wheelDeltaY);
        "wheelDeltaX" in c && (p = -1 * c.wheelDeltaX);
        "axis" in c && c.axis === c.HORIZONTAL_AXIS && ((p = -1 * a), (a = 0));
        n = 0 === a ? p : a;
        "deltaY" in c && (n = a = -1 * c.deltaY);
        "deltaX" in c && ((p = c.deltaX), 0 === a && (n = -1 * p));
        if (0 !== a || 0 !== p) {
            1 === c.deltaMode ? ((q = b.data(this, "mousewheel-line-height")), (n *= q), (a *= q), (p *= q)) : 2 === c.deltaMode && ((q = b.data(this, "mousewheel-page-height")), (n *= q), (a *= q), (p *= q));
            q = Math.max(Math.abs(a), Math.abs(p));
            if (!d || q < d) (d = q), l.settings.adjustOldDeltas && "mousewheel" === c.type && 0 === q % 120 && (d /= 40);
            l.settings.adjustOldDeltas && "mousewheel" === c.type && 0 === q % 120 && ((n /= 40), (p /= 40), (a /= 40));
            n = Math[1 <= n ? "floor" : "ceil"](n / d);
            p = Math[1 <= p ? "floor" : "ceil"](p / d);
            a = Math[1 <= a ? "floor" : "ceil"](a / d);
            l.settings.normalizeOffset && this.getBoundingClientRect && ((c = this.getBoundingClientRect()), (v = f.clientX - c.left), (B = f.clientY - c.top));
            f.deltaX = p;
            f.deltaY = a;
            f.deltaFactor = d;
            f.offsetX = v;
            f.offsetY = B;
            f.deltaMode = 0;
            e.unshift(f, n, p, a);
            m && clearTimeout(m);
            m = setTimeout(t, 200);
            return (b.event.dispatch || b.event.handle).apply(this, e);
        }
    }
    function t() {
        d = null;
    }
    var e = ["wheel", "mousewheel", "DOMMouseScroll", "MozMousePixelScroll"],
        v = "onwheel" in document || 9 <= document.documentMode ? ["wheel"] : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
        C = Array.prototype.slice,
        m,
        d;
    if (b.event.fixHooks) for (var n = e.length; n; ) b.event.fixHooks[e[--n]] = b.event.mouseHooks;
    var l = (b.event.special.mousewheel = {
        version: "3.1.12",
        setup: function () {
            if (this.addEventListener) for (var d = v.length; d; ) this.addEventListener(v[--d], p, !1);
            else this.onmousewheel = p;
            b.data(this, "mousewheel-line-height", l.getLineHeight(this));
            b.data(this, "mousewheel-page-height", l.getPageHeight(this));
        },
        teardown: function () {
            if (this.removeEventListener) for (var d = v.length; d; ) this.removeEventListener(v[--d], p, !1);
            else this.onmousewheel = null;
            b.removeData(this, "mousewheel-line-height");
            b.removeData(this, "mousewheel-page-height");
        },
        getLineHeight: function (d) {
            d = b(d);
            var c = d["offsetParent" in b.fn ? "offsetParent" : "parent"]();
            c.length || (c = b("body"));
            return parseInt(c.css("fontSize"), 10) || parseInt(d.css("fontSize"), 10) || 16;
        },
        getPageHeight: function (d) {
            return b(d).height();
        },
        settings: { adjustOldDeltas: !0, normalizeOffset: !0 },
    });
    b.fn.extend({
        mousewheel: function (b) {
            return b ? this.bind("mousewheel", b) : this.trigger("mousewheel");
        },
        unmousewheel: function (b) {
            return this.unbind("mousewheel", b);
        },
    });
});
