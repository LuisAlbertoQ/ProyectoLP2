<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            :root{
    --mode-blue: #023052;

}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{

    background-color: skyblue;
    min-height: 200vh;
}

header{
    position: fixed;
    top: 0;
    left: 0;

    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.6s;
    padding: 2px 10px;
    z-index: 100000;
    background: rgba(255, 255, 255, 0.795);
    backdrop-filter: blur(20px);
    border-bottom: 4px solid rgba(255, 255, 255, 0.815);
}

header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.877), transparent);
    transition: .5s;

}

header:hover::before{
    left: 100%;
}

header.sticky {
    padding: 15px 100px;
    background: #fff;
}

header .logo{
    position: relative;
    font-weight: 500;
    color: #fff;
    text-decoration: none;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.6s;
}

header ul {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

header ul li {
    position: relative;
    list-style: none;
}

header ul li a {
    position: relative;
    margin: 0 15px;
    text-decoration: none;
    color: #fff;
    letter-spacing: 2px;
    font-weight: 500px;
    transition: 0.6s;
}

.banner{
    position: relative;
    width: 100%;
    height: 100vh;
    background: url(/img/UPeU-Juliaca-2018-1024x768.webp);
    background-size: cover;
}

header.sticky .logo,
header.sticky .logeo a,
header.sticky ul li a {
    color: #000;
}

.logeo a {
    color: black;
    margin-right: 2cm;
    text-decoration: none;
}
.container {
    position: relative;
    width: 100%;
    height: 100vh;
  }

  .bg-slide,
  .bg-slide .circle,
  .bg-slide .circle img,
  .circle-darktransp{
    position: absolute;
    width: 100%;
    height: 100%;
  }

  .bg-slide{
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .bg-slide .circle {
    pointer-events: none;
    user-select: none;
    overflow: hidden;
  }


  .bg-slide.active .circle {
    z-index: 10;

  }

  .bg-slide .circle.large,
  .circle-darktransp {
    clip-path: circle(50% at 50% 50%);
  }

  .bg-slide .circle.small{
    clip-path: circle(30% at 50% 50%);
    z-index: 12;

  }


  .bg-slide .circle img{
    object-fit: cover;
    transform: rotate(0deg) scale(4.2);
    opacity: 0;
    transition: transform 1.5s cubic-bezier(0.645,
    0.045, 0.355, 1), opacity 1s cubic-bezier(0.645, 0.045, 0.355, 1);
  }

  .bg-slide.active .circle img{
    transform: rotate(360deg) scale(2.2);
    opacity: 1;
  }

  .bg-slide.after.active .circle img{
    transform: rotate(720deg) scale(4.2);
    opacity: 0;

  }

  .bg-slide.active .circle.bg img,
  .bg-slide.after.active .circle.bg img {
    transition-delay: .9s ;
  }

  .bg-slide.active .circle.large img,
  .bg-slide.after.active .circle.large img {
    transition-delay: .6s ;
  }

  .bg-slide.active .circle.small img,
  .bg-slide.after.active .circle.small img {
    transition-delay: .3s ;
  }


  .circle-darktransp {
    background: rgba(0, 0, 0, .2);
    z-index: 11;
  }

  .bg-slide .content-text {
    position: absolute;
    z-index: 100;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .bg-slide.active .content-text {
    z-index: 101;
  }

  .content-text .place,
  .content-text .country {
    /*background: seagreen;*/
    overflow: hidden;

    }


  .content-text .country{
    margin-top: 60px;
  }

  .content-text .place h1,
  .content-text .country h2{
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    line-height: 1;
    opacity: 0;
    transition: transform .5s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition-delay: 1s;
  }
  .content-text .place h1{
    font-size: 60px;
    letter-spacing: 30px;
    margin-right: 80px;
    transform: translateY(100%);
  }

  .content-text .country h2 {
    font-size: 60px;
    letter-spacing: 10px;
    margin-right: 30px;
    transform: translateY(-100%);

  }

  .bg-slide.active .content-text .place h1,
  .bg-slide.active .content-text .country h2 {
    transform: translateY(0%);
    opacity: 1;
  }
    .bg-slide.after-active .content-text .place h1 {
    transform: translateY(-100%);
    opacity: 1;

  }

  .bg-slide.after-active .content-text .country h2 {
    transform: translateY(100%);
    opacity: 1;

  }

  .line {
    position: absolute;
    top: 50.5%;
    left: 50%;
    transform: translateX(-50%);
    width: 500px;
    height: 5px;
    background: #fefefe;
    z-index: 100;
  }


  .rotate-btn{
    position: absolute;
    bottom: 60px;
    right: 60px;
    width: 60px;
    height: 60px;
    background: #fd4b0f;
    border: 2px solid #f8f8f8;
    border-radius: 50%;
    cursor: pointer;
    z-index: 100;
    display: flex;
    justify-content:center;
    align-items: center;
  }

  .rotate-btn.active {
    transform: rotate(360deg);
    pointer-events: none;
    transition: transform .5s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition-delay: .2s;
  }
  .rotate-btn i{
    font-size: 40px;
    color: #f8f8f8;

  }

/*----------------------------------------------------------------------------------------------------------------*/

  .home {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding-top:12em;
    padding-bottom: 15em;

    /* background-color: #fd4b0f; */
  }
  #home{
    background: linear-gradient(170deg, #6da4cd, white );
  }
  .text1 {
    margin-right: 4em;
  }

  .h1 {
    margin-top: -50px;
    /* padding-left: -100em; */
    font-size: 6em;
    /*TODO: */
    color: #0e76a8;
    font-family: 'Nunito Sans', sans-serif;
    /* background-color: #0e76a8; */
    align-items: center;
  }

  /* --- FIXME: Animation --- */
  .h2 {
    display: flex;
    align-items: center;
    color: var(--mode-corp);
    font-family: 'Nunito Sans', sans-serif;
    font-size: 3.5em;
    transform-origin: center bottom;
    animation: bounce 1.5s infinite ease-in-out;
  }

  @keyframes bounce {

    0%,
    100% {
      transform: translateY(0);
    }25% {
      transform: translateY(-5px);
    }50% {
      transform: translateY(0);
    }75% {
      transform: translateY(-3px);
    }
  }

  #web-title {
    font-size: 1em;
    text-decoration: none;
    color:#0e76a8;

  }

  #web-title:hover {
    font-size: 1em;
    font-family: 'Nunito Sans', sans-serif;
    background: linear-gradient(45deg, #FF5252, #FF4081, #FF5370, #FF7043, #FF8A65,
        #FF9E80, #FFAB91, #FFCC80, #FFD740, #FFE57F,
        #FFEE58, #FFF176);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    display: inline-block;
  }

  /* --- Photo --- */
  .elon {
    object-fit: cover;
    width: 27em;
    /*TODO: */
    pointer-events: none;
    margin-top: -10px;
  }

  /* curriculum */
  .cv a {
    margin-top: 29px;
    width: 220px;
    height: 60px;
    background-color: var(--mode-dark);
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  /* FIXME: --- --- -- Download */
  .download {
    font-size: 1.2em;
    text-decoration: none;
    padding-right: 40px;
    padding-left: 40px;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #f8f8f8;
  }

  .download:hover {
    color: var(--mode-corp);
  }
  /* FIXME: --- --- -- Mouse */
  #mouse {
    position: absolute;
    width: 2.3rem;
    top: 32rem;
  }






  .blog {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding-top: 10em;
    /* background-color: #0e76a8; */
    margin-right: 1em;
    background: linear-gradient(170deg, #6da4cd, white );

  }
  .conter4 {
    display: flex;
    position: relative;
    /* background-color: #fd4b0f; */
  }
  /* FIXME:  Slider 1 |pag. 4 efeto marque */
  .barra {
    margin-top: -100px;
    position: relative;
    width: 285px;
    /*FIXME:*/
    height: 630px;
    overflow: hidden;
    /* background-color: #fd4b0f; */
  }
  .bar img {
    width: 240px;
    border-radius: 20px;
    margin-bottom: 40px;
    cursor: pointer;
  }
  .bar {
    position: absolute;
    animation: bar 10s linear infinite;
    animation-delay: -10s;
  }
  @keyframes bar {
    0% {
      transform: translateY(0);
    }100% {
      transform: translateY(calc(-40vh * 5));
    }
  }

  .barra:hover {
    display: block;
  }
  .barra:hover .bar {
    animation-play-state: paused;
    cursor: pointer;
  }
  .imag {
    position: relative;
    display: inline-block;
    margin-right: 10px;
  }
  .over {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 90.3%;
    background-color: rgba(0, 0, 0, 0.4);
    opacity: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.3s ease;
    border-radius: 20px;
  }
  .over i {
    font-size: 35px;
    color: white;
  }
  .imag:hover .over {
    opacity: 1;
  }
  .bloque1 {
    position: absolute;
    z-index: 99999;
    width: 243px;
    height: 5%;
    margin-bottom: 34.5%;
    background-image: linear-gradient(to bottom, rgb(255, 255, 255), transparent);
  }
  .bloque2 {
    position: absolute;
    margin-top: 580px;
    z-index: 99999;
    width: 243px;
    height: 50px;
    background-image: linear-gradient(0deg, rgb(255, 255, 255), transparent);
  }
  /* --- - -- - - -- FIXME: Slider 2 YT  */
  .videosH {
    margin-top: 1%;
    width:    50em;
    /* background-color: #20a80e; */
    display: flex;
    /* margin-left: -8rem;  */
    overflow: hidden;
    /* TODO:*/
    /* padding-left: 30px; */
  }
  .slider-container {
    display: flex;
    padding-left: 10px;
    /* width: 190px; */
    /* background-color: #0e76a8; */
    transition: transform 0.5s ease-in-out;
  }
  .video-wrapper {
    flex: 0 0 50%;
    padding: 15px;
    box-sizing: border-box;
    text-align: center;
    /* background-color: #fd4b0f; */
  }
  .videosH iframe {
    width: 49em;
    height: 20em;
    border-radius: 20px;
  }
  .slider-container h2,
  p {
    text-align: left;
  }

  /* --- -- -- -- -- - TODO: Page 5 --- -- -- - - -- -  */
  .contact {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding-top: 10em;
    /*background-color: #0e76a8; */
  }
  .bloque3 {
    position: absolute;
    z-index: 99999;
    width: 100%;
    height: 5%;
    margin-bottom: 34.5%;
    padding-top: 2em;
    background-image: linear-gradient(to bottom, rgb(255, 255, 255), transparent);
  }
  .bloque4 {
    position: absolute;
    height: 4%;
    width: 100%;
    height: 20px;
    top: -26%;
    background-image: linear-gradient(0deg, rgb(255, 255, 255), transparent);
  }
  /* FIXME: Design */
  .contact {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }
  .contact::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  /* Scroll animation */
  .scroll {
    width: calc(100% + 400px);
    left: -400px;
    display: flex;
    box-shadow: 0 15px 10px rgba(0 0 0 0.5);
    transform: rotate(calc(var(--d) * 1deg)) translateY(calc(var(--y) * 1px));
  }
  .scroll div {
    background-color: orangered;
    color: #070707;
    font-size: 3.2em;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    font-weight: 600;
    white-space: nowrap;
    animation: animate 60s linear infinite;
    animation-delay: -60s;
  }
  .scroll div:nth-child(2) {
    animation: animate-two 60s linear infinite;
    animation-delay: -30s;
  }

  /* Animation */
  @keyframes animate {
    0% {
      transform: translateX(100%);
    }100% {
      transform: translateX(-100%);
    }
  }

  @keyframes animate-two {
    0% {
      transform: translateX(0);
    }100% {
      transform: translateX(-200%);
    }
  }

  .footer {
    background-color: #023052;;
    z-index: 999999;
    position: relative;
    height: 74px;
    display: flex;
  }
  .footer img {
    margin-top: 15px;
    padding-left: 38%;
  }
  .footer p {
    color: #f8f8f8;
    padding-top: 30px;
    padding-left: 10px;
  }
  :root{
    --mode-blue: #023052;

}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.mn {
    display: flex;
    flex-wrap: wrap;
    align-items: center;

    justify-content: space-between;
    min-height: 100vh;
    background: linear-gradient(170deg, #f7f7f8, white );

}
.japon{
    display: inline;
    margin-right: 7cm;
}
.turismo{
    margin-left: 7cm;
}

.card {
    position: relative;
    width: 300px;
    height: 350px;
    margin: 20px;
}

.card .face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 10px;

}

#ofertas{
    display: inline;
    justify-content: space-between;
}

.card .front img {
    position: absolute;
    width: 100%;
    height: 100%;

}

.card .front h3 {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 45px;
    line-height: 45px;
    color: #fff;
    background: rgba(0,0,0,.4);
    text-align: center;
}

.card .back {
    transform: perspective(600px) rotateY(180deg);
    background: rgb(3, 35, 54);
    padding: 15px;
    color: #f3f3f3;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    text-align: center;
    box-shadow: 0 5px 10px #000;
}

.card .back .link {
    border-top: solid 1px #f3f3f3;
    height: 50px;
    line-height: 50px;
}

.card .back .link a {
    color: #f3f3f3;
}

.card .back h3 {
    font-size: 30px;
    margin-top: 20px;
    letter-spacing: 2px;
}

.card .back p {
    letter-spacing: 1px;
}


      </style>
    </head>


    <body class="antialiased">
        <header>
            <img src="https://upeu.edu.pe/wp-content/uploads/2022/03/04.png" alt="" class="logo" width="200px">
            <ul>

                @if (Route::has('login'))
                    <div class="logeo">
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>

                        @else
                            <a href="{{ route('login') }}">Acceder</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registrarse</a>

                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
        </header>
        <section id="banner">
            <div class="container">
                <div class="bg-slide active">
                  <div class="circle bg">
                    <img src="https://upeu.edu.pe/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-19-at-10.01.57-1080x675.jpeg" alt="">
                  </div>


                </div>

                <div class="bg-slide">
                  <div class="circle bg">
                    <img src="https://upeu.edu.pe/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-19-at-10.01.57-1080x675.jpeg" alt="">
                  </div>


                  <div class="content-text">
                    <div class="place">
                      <h1>Practicas</h1>
                    </div>
                    <div class="country">
                      <h2>Pre Profesioanales</h2>
                    </div>

                  </div>
                </div>

                <div class="bg-slide">
                  <div class="circle bg">
                    <img src="https://upeu.edu.pe/wp-content/uploads/2022/12/WhatsApp-Image-2022-12-19-at-10.01.57-1080x675.jpeg" alt="">
                  </div>



                  </div>
                </div>


              </div>
        </section>
        <section id="ofertas">
            <div class="mn">

                <div class="turismo">
                <div class="card">
                    <div class="face front">
                        <img src="https://www.emagister.com/blog/wp-content/uploads/2018/06/GettyImages-1227643382.jpg" alt="">
                        <h3>Convocatoria</h3>
                    </div>
                    <div class="face back">
                        <h3>Ver las Postulaciones</h3>
                        <p>Podra ver las postulaciones de los egresados</p>
                        <div class="link">
                            <a href="postulaciones" class="btn btn-info">INGRESAR</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="face front">
                        <img src="https://www.emagister.com/blog/wp-content/uploads/2018/06/GettyImages-1227643382.jpg" alt="">
                        <h3>Convocatoria</h3>
                    </div>
                    <div class="face back">
                        <h3>Pagos </h3>
                        <p>EL decente puede ver las ofertas laborales.</p>
                        <div class="">
                            <a href="docente" class="btn btn-info">INGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="japon">
                <div class="card">
                    <div class="face front">
                        <img src="https://www.emagister.com/blog/wp-content/uploads/2018/06/GettyImages-1227643382.jpg" alt="">
                        <h3>Convocatoria</h3>
                    </div>
                    <div class="face back">
                        <h3>VER LAS OFERTAS LABORALES</h3>
                        <p>EL decente puede ver las ofertas laborales.</p>
                        <div class="">
                            <a href="docente" class="btn btn-info">INGRESAR</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face front">
                        <img src="https://www.emagister.com/blog/wp-content/uploads/2018/06/GettyImages-1227643382.jpg" alt="">
                        <h3>Convocatoria </h3>
                    </div>
                    <div class="face back">
                        <h3>VER LAS OFERTAS LABORALES</h3>
                        <p>EL decente puede ver las ofertas laborales.</p>
                        <div class="">
                            <a href="docente" class="btn btn-info">INGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </section>





        @livewireScripts
    </body>
</html>
