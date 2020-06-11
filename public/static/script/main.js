/* Tomato JS | MIT License | tomato.sh */

// Typed Text
var typed = new Typed('.typed', {
    strings: [
        " Fullstack Developer",
        " System Administrator",
        " Fruit Catcher",
        " Circle Clicker",
        " Loli Protector"],
    typeSpeed: 30,
    startDelay: 1000,
    backSpeed: 20,
    backDelay: 5000,
    loop: true,
    showCursor: true
});

// Custom FontAwesome Icons
var faOsu = {
    prefix: 'fac',
    iconName: 'osu',
    icon: [5500, 5500, [], 'e001', 'M2505 5304 c-570 -77 -1077 -326 -1475 -724 -401 -401 -650 -911 -725 -1483 -31 -243 -17 -594 35 -847 153 -738 652 -1390 1325 -1732 384 -195 731 -278 1165 -278 434 0 781 83 1165 278 468 238 859 629 1097 1097 195 384 278 731 278 1165 0 434 -83 781 -278 1165 -241 474 -630 861 -1111 1104 -275 139 -523 214 -841 256 -143 18 -494 18 -635 -1z m615 -290 c1124 -144 1980 -1116 1980 -2249 0 -541 -195 -1064 -552 -1480 -596 -694 -1553 -964 -2413 -680 -468 154 -855 437 -1146 839 -292 401 -445 907 -426 1401 29 738 411 1410 1032 1817 455 299 985 421 1525 352z M1440 3311 c-210 -29 -341 -158 -386 -381 -12 -63 -15 -111 -11 -190 17 -319 187 -490 488 -490 257 0 424 131 476 373 18 87 12 298 -10 368 -19 59 -53 125 -85 167 -38 50 -128 110 -196 131 -72 22 -199 32 -276 22z m163 -235 c80 -33 121 -132 121 -291 0 -202 -65 -305 -194 -305 -78 0 -137 44 -168 125 -50 130 -24 375 46 438 51 46 131 60 195 33z M2365 3310 c-81 -10 -173 -34 -188 -49 -21 -21 30 -221 57 -221 6 0 40 10 76 21 94 31 220 31 278 1 50 -27 70 -61 56 -99 -12 -36 -57 -60 -177 -95 -122 -36 -165 -57 -211 -103 -62 -62 -83 -193 -50 -305 21 -72 97 -148 179 -180 109 -42 313 -39 464 6 l54 16 -6 41 c-7 49 -33 135 -46 157 -9 12 -21 11 -94 -8 -139 -36 -238 -26 -268 29 -29 55 11 87 166 134 158 48 214 87 254 175 26 57 28 185 5 253 -31 91 -124 170 -242 207 -71 22 -213 31 -307 20z M3488 3309 c-100 -10 -142 -22 -206 -59 -62 -36 -113 -101 -144 -185 -21 -57 -22 -77 -26 -426 l-3 -366 32 -7 c40 -8 172 -8 222 0 l37 7 0 311 c0 320 5 371 37 415 39 51 70 65 148 69 41 2 86 1 100 -2 l25 -6 0 -394 0 -393 38 -7 c48 -8 181 -8 221 0 l31 7 0 492 0 493 -88 21 c-91 21 -250 42 -312 39 -19 0 -70 -4 -112 -9z M4260 3290 c-12 -7 -15 -36 -15 -149 0 -77 4 -143 8 -148 11 -11 283 -11 294 0 12 13 16 248 4 280 l-11 27 -132 0 c-73 0 -140 -5 -148 -10z M4320 2851 l-55 -6 -3 -75 c-14 -407 -18 -886 -8 -892 15 -10 278 -10 293 0 9 6 9 117 1 482 -5 261 -13 478 -16 481 -11 10 -151 17 -212 10z']
};
  
FontAwesome.library.add(
    faOsu
);