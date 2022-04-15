<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Tailwind Starter Template - Help Article: Tailwind Toolbox</title>
      <style>html{line-height:1.15;-webkit-text-size-adjust:100%}
          body{margin:0}main{display:block}h1{font-size:2em;margin:.67em 0}
          hr{box-sizing:content-box;height:0;overflow:visible}
          pre{font-family:monospace,monospace;font-size:1em}
          a{background-color:transparent}abbr[title]{border-bottom:none;
          text-decoration:underline;
          -webkit-text-decoration:underline dotted;
          text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;
          font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;
          vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;
          line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;
          display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;
          padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;
          outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}[hidden],template{display:none}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}button{background-color:transparent;background-image:none;padding:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}fieldset,ol,ul{margin:0;padding:0}ol,ul{list-style:none}html{font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #d5d6d7}
          hr{border-top-width:1px}img{border-style:solid}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{color:#a0aec0}input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#a0aec0}input::-ms-input-placeholder,textarea::-ms-input-placeholder{color:#a0aec0}input::placeholder,textarea::placeholder{color:#a0aec0}[role=button],button{cursor:pointer}table{border-collapse:collapse}
          h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}
          button,input,optgroup,select,textarea{padding:0;line-height:inherit;color:inherit}
          code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}
          audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}
          img,video{max-width:100%;height:auto}.container{width:100%}
          @media (min-width:640px){.container{max-width:640px}}
          @media (min-width:768px){.container{max-width:768px}}
          @media (min-width:1024px){.container{max-width:1024px}}
          @media (min-width:1280px){.container{max-width:1280px}}.form-input{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff;border-color:#e2e8f0;border-width:1px;border-radius:.25rem;padding:.5rem .75rem;font-size:1rem;line-height:1.5}.form-input::-moz-placeholder{color:#9e9e9e;opacity:1}.form-input:-ms-input-placeholder{color:#9e9e9e;opacity:1}.form-input::-ms-input-placeholder{color:#9e9e9e;opacity:1}.form-input::placeholder{color:#9e9e9e;opacity:1}.form-input:focus{outline:none;box-shadow:0 0 0 3px rgba(66,153,225,.5);border-color:#63b3ed}.form-textarea{-webkit-appearance:none;
          -moz-appearance:none;appearance:none;background-color:#fff;border-color:#e2e8f0;border-width:1px;border-radius:.25rem;padding:.5rem .75rem;font-size:1rem;line-height:1.5}.form-textarea::-moz-placeholder{color:#9e9e9e;opacity:1}.form-textarea:-ms-input-placeholder{color:#9e9e9e;opacity:1}.form-textarea::-ms-input-placeholder{color:#9e9e9e;opacity:1}.form-textarea::placeholder{color:#9e9e9e;opacity:1}.form-textarea:focus{outline:none;box-shadow:0 0 0 3px rgba(66,153,225,.5);border-color:#63b3ed}.form-multiselect{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff;border-color:#e2e8f0;border-width:1px;border-radius:.25rem;padding:.5rem .75rem;font-size:1rem;line-height:1.5}.form-multiselect:focus{outline:none;box-shadow:0 0 0 3px rgba(66,153,225,.5);border-color:#63b3ed}.form-select{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23a0aec0'%3E%3Cpath d='M15.3 9.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z'/%3E%3C/svg%3E");-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;color-adjust:exact;background-repeat:no-repeat;background-color:#fff;border-color:#e2e8f0;border-width:1px;border-radius:.25rem;padding:.5rem 2.5rem .5rem .75rem;font-size:1rem;line-height:1.5;background-position:right .5rem center;background-size:1.5em 1.5em}.form-select::-ms-expand{color:#a0aec0;border:none}@media not print{.form-select::-ms-expand{display:none}}@media print and (-ms-high-contrast:active),print and (-ms-high-contrast:none){.form-select{padding-right:.75rem}}.form-select:focus{outline:none;box-shadow:0 0 0 3px rgba(66,153,225,.5);border-color:#63b3ed}.form-checkbox{-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;color-adjust:exact;display:inline-block;vertical-align:middle;background-origin:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;flex-shrink:0;
          height:1em;width:1em;color:#4299e1;background-color:#fff;border-color:#e2e8f0;border-width:1px;border-radius:.25rem}.form-checkbox:checked{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L7 8.586 5.707 7.293z'/%3E%3C/svg%3E");border-color:transparent;background-color:currentColor;background-size:100% 100%;
          background-position:50%;background-repeat:no-repeat}@media not print{.form-checkbox::-ms-check{border-width:1px;color:transparent;background:inherit;border-color:inherit;
          border-radius:inherit}}.form-checkbox:focus{outline:none;box-shadow:0 0 0 3px rgba(66,153,225,.5);border-color:#63b3ed}.form-radio{-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;color-adjust:exact;display:inline-block;vertical-align:middle;background-origin:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;flex-shrink:0;border-radius:100%;height:1em;width:1em;color:#4299e1;background-color:#fff;border-color:#e2e8f0;border-width:1px}.form-radio:checked{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 16 16' fill='%23fff' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='8' cy='8' r='3'/%3E%3C/svg%3E");border-color:transparent;background-color:currentColor;background-size:100% 100%;background-position:50%;background-repeat:no-repeat}@media not print{.form-radio::-ms-check{border-width:1px;color:transparent;background:inherit;border-color:inherit;border-radius:inherit}}.form-radio:focus{outline:none;box-shadow:0 0 0 3px rgba(66,153,225,.5);border-color:#63b3ed}.space-y-2>:not(template)~:not(template){--space-y-reverse:0;margin-top:calc(0.5rem*(1 - var(--space-y-reverse)));margin-bottom:calc(0.5rem*var(--space-y-reverse))}.space-x-3>:not(template)~:not(template){--space-x-reverse:0;margin-right:calc(0.75rem*var(--space-x-reverse));margin-left:calc(0.75rem*(1 - var(--space-x-reverse)))}.space-y-4>:not(template)~:not(template){--space-y-reverse:0;margin-top:calc(1rem*(1 - var(--space-y-reverse)));margin-bottom:calc(1rem*var(--space-y-reverse))}.space-x-4>:not(template)~:not(template){--space-x-reverse:0;margin-right:calc(1rem*var(--space-x-reverse));margin-left:calc(1rem*(1 - var(--space-x-reverse)))}.space-x-6>:not(template)~:not(template){--space-x-reverse:0;margin-right:calc(1.5rem*var(--space-x-reverse));margin-left:calc(1.5rem*(1 - var(--space-x-reverse)))}.divide-y>:not(template)~:not(template){--divide-y-reverse:0;border-top-width:calc(1px*(1 - var(--divide-y-reverse)));border-bottom-width:calc(1px*var(--divide-y-reverse))}.theme-dark .dark\:divide-gray-700>:not(template)~:not(template){--divide-opacity:1;border-color:#24262d;
          border-color:rgba(36,38,45,var(--divide-opacity))}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-black{--bg-opacity:1;background-color:#000;background-color:rgba(0,0,0,var(--bg-opacity))}.bg-gray-50{--bg-opacity:1;background-color:#f9fafb;background-color:rgba(249,250,251,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f4f5f7;background-color:rgba(244,245,247,var(--bg-opacity))}.bg-red-100{--bg-opacity:1;background-color:#fde8e8;background-color:rgba(253,232,232,var(--bg-opacity))}.bg-red-600{--bg-opacity:1;background-color:#e02424;background-color:rgba(224,36,36,var(--bg-opacity))}.bg-orange-100{--bg-opacity:1;background-color:#feecdc;background-color:rgba(254,236,220,var(--bg-opacity))}.bg-green-100{--bg-opacity:1;background-color:#def7ec;background-color:rgba(222,247,236,var(--bg-opacity))}.bg-teal-100{--bg-opacity:1;background-color:#d5f5f6;background-color:rgba(213,245,246,var(--bg-opacity))}.bg-teal-500{--bg-opacity:1;background-color:#0694a2;background-color:rgba(6,148,162,var(--bg-opacity))}.bg-teal-600{--bg-opacity:1;background-color:#047481;background-color:rgba(4,116,129,var(--bg-opacity))}.bg-blue-100{--bg-opacity:1;background-color:#e1effe;background-color:rgba(225,239,254,var(--bg-opacity))}.bg-blue-500{--bg-opacity:1;background-color:#3f83f8;background-color:rgba(63,131,248,var(--bg-opacity))}.bg-blue-600{--bg-opacity:1;background-color:#1c64f2;background-color:rgba(28,100,242,var(--bg-opacity))}.bg-purple-600{--bg-opacity:1;background-color:#7e3af2;background-color:rgba(126,58,242,var(--bg-opacity))}.hover\:bg-gray-100:hover{--bg-opacity:1;background-color:#f4f5f7;background-color:rgba(244,245,247,var(--bg-opacity))}.hover\:bg-purple-700:hover{--bg-opacity:1;background-color:#6c2bd9;background-color:rgba(108,43,217,var(--bg-opacity))}.focus\:bg-white:focus{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.active\:bg-transparent:active{background-color:transparent}.active\:bg-purple-600:active{--bg-opacity:1;background-color:#7e3af2;background-color:rgba(126,58,242,var(--bg-opacity))}.theme-dark .dark\:bg-gray-700{--bg-opacity:1;background-color:#24262d;background-color:rgba(36,38,45,var(--bg-opacity))}.theme-dark .dark\:bg-gray-800{--bg-opacity:1;background-color:#1a1c23;background-color:rgba(26,28,35,var(--bg-opacity))}.theme-dark .dark\:bg-gray-900{--bg-opacity:1;background-color:#121317;background-color:rgba(18,19,23,var(--bg-opacity))}.theme-dark .dark\:bg-red-600{--bg-opacity:1;background-color:#e02424;background-color:rgba(224,36,36,var(--bg-opacity))}.theme-dark .dark\:bg-red-700{--bg-opacity:1;background-color:#c81e1e;background-color:rgba(200,30,30,var(--bg-opacity))}.theme-dark .dark\:bg-orange-500{--bg-opacity:1;background-color:#ff5a1f;background-color:rgba(255,90,31,var(--bg-opacity))}.theme-dark .dark\:bg-orange-600{--bg-opacity:1;background-color:#d03801;background-color:rgba(208,56,1,var(--bg-opacity))}.theme-dark .dark\:bg-green-500{--bg-opacity:1;background-color:#0e9f6e;background-color:rgba(14,159,110,var(--bg-opacity))}.theme-dark .dark\:bg-green-700{--bg-opacity:1;background-color:#046c4e;background-color:rgba(4,108,78,var(--bg-opacity))}.theme-dark .dark\:bg-teal-500{--bg-opacity:1;background-color:#0694a2;background-color:rgba(6,148,162,var(--bg-opacity))}.theme-dark .dark\:bg-blue-500{--bg-opacity:1;background-color:#3f83f8;background-color:rgba(63,131,248,var(--bg-opacity))}.theme-dark .dark\:hover\:bg-gray-800:hover{--bg-opacity:1;background-color:#1a1c23;background-color:rgba(26,28,35,var(--bg-opacity))}.bg-opacity-50{--bg-opacity:0.5}.border-transparent{border-color:transparent}.border-white{--border-opacity:1;border-color:#fff;border-color:rgba(255,255,255,var(--border-opacity))}.border-gray-100{--border-opacity:1;border-color:#f4f5f7;border-color:rgba(244,245,247,var(--border-opacity))}.border-gray-300{--border-opacity:1;border-color:#d5d6d7;border-color:rgba(213,214,215,var(--border-opacity))}.border-red-600{--border-opacity:1;border-color:#e02424;border-color:rgba(224,36,36,var(--border-opacity))}.border-green-600{--border-opacity:1;border-color:#057a55;border-color:rgba(5,122,85,var(--border-opacity))}.border-purple-600{--border-opacity:1;border-color:#7e3af2;border-color:rgba(126,58,242,var(--border-opacity))}.focus\:border-gray-500:focus{--border-opacity:1;border-color:#707275;border-color:rgba(112,114,117,var(--border-opacity))}.focus\:border-red-400:focus{--border-opacity:1;border-color:#f98080;border-color:rgba(249,128,128,var(--border-opacity))}.focus\:border-green-400:focus{--border-opacity:1;border-color:#31c48d;border-color:rgba(49,196,141,var(--border-opacity))}.focus\:border-purple-300:focus{--border-opacity:1;border-color:#cabffd;border-color:rgba(202,191,253,var(--border-opacity))}.focus\:border-purple-400:focus{--border-opacity:1;border-color:#ac94fa;border-color:rgba(172,148,250,var(--border-opacity))}.hover\:border-gray-500:hover{--border-opacity:1;border-color:#707275;border-color:rgba(112,114,117,var(--border-opacity))}.theme-dark .dark\:border-gray-600{--border-opacity:1;border-color:#4c4f52;border-color:rgba(76,79,82,var(--border-opacity))}.theme-dark .dark\:border-gray-700{--border-opacity:1;border-color:#24262d;border-color:rgba(36,38,45,var(--border-opacity))}.theme-dark .dark\:border-gray-800{--border-opacity:1;border-color:#1a1c23;border-color:rgba(26,28,35,var(--border-opacity))}.rounded{border-radius:.25rem}.rounded-md{border-radius:.375rem}.rounded-lg{border-radius:.5rem}.rounded-full{border-radius:9999px}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-t-lg{border-top-left-radius:.5rem}.rounded-r-lg,.rounded-t-lg{border-top-right-radius:.5rem}.rounded-r-lg{border-bottom-right-radius:.5rem}.rounded-l-lg{border-top-left-radius:.5rem;border-bottom-left-radius:.5rem}.rounded-tr-lg{border-top-right-radius:.5rem}.rounded-br-lg{border-bottom-right-radius:.5rem}.border-0{border-width:0}.border-2{border-width:2px}.border{border-width:1px}.border-r-0{border-right-width:0}.border-t{border-top-width:1px}.border-b{border-bottom-width:1px}.cursor-not-allowed{cursor:not-allowed}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.hidden{display:none}.theme-dark .dark\:block{display:block}.theme-dark .dark\:hidden{display:none}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-end{align-items:flex-end}.items-center{align-items:center}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.flex-1{flex:1 1 0%}.flex-shrink-0{flex-shrink:0}.font-medium{font-weight:500}.font-semibold{font-weight:600}.font-bold{font-weight:700}.h-3{height:.75rem}.h-4{height:1rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-8{height:2rem}.h-12{height:3rem}.h-32{height:8rem}.h-full{height:100%}.h-screen{height:100vh}.text-xs{font-size:.75rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.text-xl{font-size:1.25rem}.text-2xl{font-size:1.5rem}.text-6xl{font-size:4rem}.leading-5{line-height:1.25rem}.leading-none{line-height:1}.leading-tight{line-height:1.25}.my-6{margin-top:1.5rem;margin-bottom:1.5rem}.my-8{margin-top:2rem;margin-bottom:2rem}.mx-auto{margin-left:auto;margin-right:auto}.-mx-6{margin-left:-1.5rem;margin-right:-1.5rem}.mt-1{margin-top:.25rem}.mr-1{margin-right:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.mb-2{margin-bottom:.5rem}.ml-2{margin-left:.5rem}.mr-3{margin-right:.75rem}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mr-4{margin-right:1rem}.mb-4{margin-bottom:1rem}.ml-4{margin-left:1rem}.mr-5{margin-right:1.25rem}.mt-6{margin-top:1.5rem}.mr-6{margin-right:1.5rem}.mb-6{margin-bottom:1.5rem}.ml-6{margin-left:1.5rem}.mt-8{margin-top:2rem}.mb-8{margin-bottom:2rem}.mt-16{margin-top:4rem}.-mr-1{margin-right:-.25rem}.-ml-1{margin-left:-.25rem}.-mb-4{margin-bottom:-1rem}.max-h-0{max-height:0}.max-h-xl{max-height:36rem}.max-w-xl{max-width:36rem}.max-w-2xl{max-width:42rem}.max-w-4xl{max-width:56rem}.min-h-screen{min-height:100vh}.min-w-0{min-width:0}.object-cover{-o-object-fit:cover;object-fit:cover}.opacity-0{opacity:0}.opacity-25{opacity:.25}.opacity-50{opacity:.5}.opacity-100{opacity:1}.focus\:outline-none:focus{outline:0}.overflow-hidden{overflow:hidden}.overflow-x-auto{overflow-x:auto}.overflow-y-auto{overflow-y:auto}.p-1{padding:.25rem}.p-2{padding:.5rem}.p-3{padding:.75rem}.p-4{padding:1rem}.p-6{padding:1.5rem}.py-1{padding-top:.25rem;padding-bottom:.25rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.py-3{padding-top:.75rem;padding-bottom:.75rem}.px-3{padding-left:.75rem;padding-right:.75rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.pr-2{padding-right:.5rem}.pl-2{padding-left:.5rem}.pl-8{padding-left:2rem}.pr-10{padding-right:2.5rem}.pl-10{padding-left:2.5rem}.pb-16{padding-bottom:4rem}.pr-20{padding-right:5rem}.pl-20{padding-left:5rem}.placeholder-gray-600::-moz-placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.placeholder-gray-600:-ms-input-placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.placeholder-gray-600::-ms-input-placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.placeholder-gray-600::placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.focus\:placeholder-gray-500:focus::-moz-placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.focus\:placeholder-gray-500:focus:-ms-input-placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.focus\:placeholder-gray-500:focus::-ms-input-placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.focus\:placeholder-gray-500:focus::placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.theme-dark .dark\:placeholder-gray-500::-moz-placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.theme-dark .dark\:placeholder-gray-500:-ms-input-placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.theme-dark .dark\:placeholder-gray-500::-ms-input-placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.theme-dark .dark\:placeholder-gray-500::placeholder{--placeholder-opacity:1;color:#707275;color:rgba(112,114,117,var(--placeholder-opacity))}.theme-dark .dark\:focus\:placeholder-gray-600:focus::-moz-placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.theme-dark .dark\:focus\:placeholder-gray-600:focus:-ms-input-placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.theme-dark .dark\:focus\:placeholder-gray-600:focus::-ms-input-placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.theme-dark .dark\:focus\:placeholder-gray-600:focus::placeholder{--placeholder-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--placeholder-opacity))}.pointer-events-none{pointer-events:none}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.inset-0{right:0;left:0}.inset-0,.inset-y-0{top:0;bottom:0}.top-0{top:0}.right-0{right:0}.left-0{left:0}.shadow-xs{box-shadow:0 0 0 1px rgba(0,0,0,.05)}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.shadow-md{box-shadow:0 4px 6px -1px rgba(0,0,0,.1),0 2px 4px -1px rgba(0,0,0,.06)}.shadow-xl{box-shadow:0 20px 25px -5px rgba(0,0,0,.1),0 10px 10px -5px rgba(0,0,0,.04)}.shadow-inner{box-shadow:inset 0 2px 4px 0 rgba(0,0,0,.06)}.fill-current{fill:currentColor}.text-left{text-align:left}.text-center{text-align:center}.text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.text-black{--text-opacity:1;color:#000;color:rgba(0,0,0,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#9e9e9e;color:rgba(158,158,158,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#707275;color:rgba(112,114,117,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#4c4f52;color:rgba(76,79,82,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#24262d;color:rgba(36,38,45,var(--text-opacity))}.text-gray-800{--text-opacity:1;color:#1a1c23;color:rgba(26,28,35,var(--text-opacity))}.text-red-600{--text-opacity:1;color:#e02424;color:rgba(224,36,36,var(--text-opacity))}.text-red-700{--text-opacity:1;color:#c81e1e;color:rgba(200,30,30,var(--text-opacity))}.text-orange-500{--text-opacity:1;color:#ff5a1f;color:rgba(255,90,31,var(--text-opacity))}.text-orange-700{--text-opacity:1;color:#b43403;color:rgba(180,52,3,var(--text-opacity))}.text-green-500{--text-opacity:1;color:#0e9f6e;color:rgba(14,159,110,var(--text-opacity))}.text-green-600{--text-opacity:1;color:#057a55;color:rgba(5,122,85,var(--text-opacity))}.text-green-700{--text-opacity:1;color:#046c4e;color:rgba(4,108,78,var(--text-opacity))}.text-teal-500{--text-opacity:1;color:#0694a2;color:rgba(6,148,162,var(--text-opacity))}.text-blue-500{--text-opacity:1;color:#3f83f8;color:rgba(63,131,248,var(--text-opacity))}.text-purple-100{--text-opacity:1;color:#edebfe;color:rgba(237,235,254,var(--text-opacity))}.text-purple-200{--text-opacity:1;color:#dcd7fe;color:rgba(220,215,254,var(--text-opacity))}.text-purple-600{--text-opacity:1;color:#7e3af2;color:rgba(126,58,242,var(--text-opacity))}.focus-within\:text-purple-500:focus-within{--text-opacity:1;color:#9061f9;color:rgba(144,97,249,var(--text-opacity))}.focus-within\:text-purple-600:focus-within{--text-opacity:1;color:#7e3af2;color:rgba(126,58,242,var(--text-opacity))}.hover\:text-gray-700:hover{--text-opacity:1;color:#24262d;color:rgba(36,38,45,var(--text-opacity))}.hover\:text-gray-800:hover{--text-opacity:1;color:#1a1c23;color:rgba(26,28,35,var(--text-opacity))}.active\:text-gray-500:active{--text-opacity:1;color:#707275;color:rgba(112,114,117,var(--text-opacity))}.theme-dark .dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.theme-dark .dark\:text-gray-100{--text-opacity:1;color:#f4f5f7;color:rgba(244,245,247,var(--text-opacity))}.theme-dark .dark\:text-gray-200{--text-opacity:1;color:#e5e7eb;color:rgba(229,231,235,var(--text-opacity))}.theme-dark .dark\:text-gray-300{--text-opacity:1;color:#d5d6d7;color:rgba(213,214,215,var(--text-opacity))}.theme-dark .dark\:text-gray-400{--text-opacity:1;color:#9e9e9e;color:rgba(158,158,158,var(--text-opacity))}.theme-dark .dark\:text-red-100{--text-opacity:1;color:#fde8e8;color:rgba(253,232,232,var(--text-opacity))}.theme-dark .dark\:text-red-400{--text-opacity:1;color:#f98080;color:rgba(249,128,128,var(--text-opacity))}.theme-dark .dark\:text-orange-100{--text-opacity:1;color:#feecdc;color:rgba(254,236,220,var(--text-opacity))}.theme-dark .dark\:text-green-100{--text-opacity:1;color:#def7ec;color:rgba(222,247,236,var(--text-opacity))}.theme-dark .dark\:text-green-400{--text-opacity:1;color:#31c48d;color:rgba(49,196,141,var(--text-opacity))}.theme-dark .dark\:text-teal-100{--text-opacity:1;color:#d5f5f6;color:rgba(213,245,246,var(--text-opacity))}.theme-dark .dark\:text-blue-100{--text-opacity:1;color:#e1effe;color:rgba(225,239,254,var(--text-opacity))}.theme-dark .dark\:text-purple-300{--text-opacity:1;color:#cabffd;color:rgba(202,191,253,var(--text-opacity))}.theme-dark .dark\:text-purple-400{--text-opacity:1;color:#ac94fa;color:rgba(172,148,250,var(--text-opacity))}.theme-dark .dark\:focus-within\:text-purple-400:focus-within{--text-opacity:1;color:#ac94fa;color:rgba(172,148,250,var(--text-opacity))}.theme-dark .dark\:hover\:text-gray-200:hover{--text-opacity:1;color:#e5e7eb;color:rgba(229,231,235,var(--text-opacity))}.uppercase{text-transform:uppercase}.hover\:underline:hover,.underline{text-decoration:underline}.tracking-wide{letter-spacing:.025em}.align-middle{vertical-align:middle}.whitespace-no-wrap{white-space:nowrap}.w-1{width:.25rem}.w-3{width:.75rem}.w-4{width:1rem}.w-5{width:1.25rem}.w-6{width:1.5rem}.w-8{width:2rem}.w-12{width:3rem}.w-56{width:14rem}.w-64{width:16rem}.w-full{width:100%}.z-10{z-index:10}.z-20{z-index:20}.z-30{z-index:30}.gap-6{grid-gap:1.5rem;gap:1.5rem}.col-span-2{grid-column:span 2/span 2}.col-span-3{grid-column:span 3/span 3}.col-span-4{grid-column:span 4/span 4}.transform{--transform-translate-x:0;--transform-translate-y:0;--transform-rotate:0;--transform-skew-x:0;--transform-skew-y:0;--transform-scale-x:1;--transform-scale-y:1;transform:translateX(var(--transform-translate-x)) translateY(var(--transform-translate-y)) rotate(var(--transform-rotate)) skewX(var(--transform-skew-x)) skewY(var(--transform-skew-y)) scaleX(var(--transform-scale-x)) scaleY(var(--transform-scale-y))}.translate-x-1{--transform-translate-x:0.25rem}.-translate-x-20{--transform-translate-x:-5rem}.-translate-y-1{--transform-translate-y:-0.25rem}.translate-y-1\/2{--transform-translate-y:50%}.transition-all{transition-property:all}.transition{transition-property:background-color,border-color,color,fill,stroke,opacity,box-shadow,transform}.transition-colors{transition-property:background-color,border-color,color,fill,stroke}.ease-in{transition-timing-function:cubic-bezier(.4,0,1,1)}.ease-out{transition-timing-function:cubic-bezier(0,0,.2,1)}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.focus\:shadow-outline-gray:focus{box-shadow:0 0 0 3px rgba(213,214,215,.45)}.focus\:shadow-outline-red:focus{box-shadow:0 0 0 3px rgba(248,180,180,.45)}.focus\:shadow-outline-green:focus{box-shadow:0 0 0 3px rgba(132,225,188,.45)}.focus\:shadow-outline-purple:focus{box-shadow:0 0 0 3px rgba(202,191,253,.45)}.theme-dark .dark\:focus\:shadow-outline-gray:focus{box-shadow:0 0 0 3px rgba(213,214,215,.45)}@media (min-width:640px){.sm\:space-y-0>:not(template)~:not(template){--space-y-reverse:0;margin-top:calc(0px*(1 - var(--space-y-reverse)));margin-bottom:calc(0px*var(--space-y-reverse))}.sm\:space-x-6>:not(template)~:not(template){--space-x-reverse:0;margin-right:calc(1.5rem*var(--space-x-reverse));margin-left:calc(1.5rem*(1 - var(--space-x-reverse)))}.sm\:rounded-lg{border-radius:.5rem}.sm\:flex-row{flex-direction:row}.sm\:items-center{align-items:center}.sm\:justify-end{justify-content:flex-end}.sm\:justify-center{justify-content:center}.sm\:m-4{margin:1rem}.sm\:mt-auto{margin-top:auto}.sm\:max-w-xl{max-width:36rem}.sm\:p-12{padding:3rem}.sm\:py-2{padding-top:.5rem;padding-bottom:.5rem}.sm\:px-4{padding-left:1rem;padding-right:1rem}.sm\:w-auto{width:auto}.sm\:grid-cols-9{grid-template-columns:repeat(9,minmax(0,1fr))}}@media (min-width:768px){.md\:space-x-4>:not(template)~:not(template){--space-x-reverse:0;margin-right:calc(1rem*var(--space-x-reverse));margin-left:calc(1rem*(1 - var(--space-x-reverse)))}.md\:block{display:block}.md\:hidden{display:none}.md\:flex-row{flex-direction:row}.md\:items-end{align-items:flex-end}.md\:h-auto{height:auto}.md\:w-1\/2{width:50%}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:mr-32{margin-right:8rem}}@media (min-width:1280px){.xl\:grid-cols-4{grid-template-columns:repeat(4,minmax(0,1fr))}}</style>
      </style>
      <meta name="description" content="">
      <meta name="keywords" content="">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
      <!--Replace with your tailwind.css once created-->
      <style>
         @import url('https://fonts.googleapis.com/css?family=Lato');
         html { font-family: 'Lato', sans-serif; }
      </style>
   </head>
   <body class="bg-gray-100 tracking-wider tracking-normal">
      <nav id="header" class="fixed w-full z-10 top-0 bg-white border-b border-gray-400">
         <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-4">
            <div class="pl-4 flex items-center">
               <a>
               <svg class="w-6 h-6 dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
               <a class="ml-3 text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"  href="#">
               FP-BM
               </a>
               </a>
            </div>
            <div class="w-full flex-grow lg:flex  lg:content-center lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">
               <div class="flex-1 w-full mx-auto max-w-sm content-center py-4 lg:py-0">
                  <div class="relative pull-right pl-4 pr-4 md:pr-0">

                  </div>
               </div>
               <ul class="list-reset lg:flex justify-end items-center">
                  <li class="mr-3 py-2 lg:py-0">
                     <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>Log out</span>
                      </a>
                  </li>

               </ul>
            </div>
         </div>
            <div class="block lg:hidden pr-4">
               <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-purple-500 appearance-none focus:outline-none">
                  <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <title>Menu</title>
                     <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                  </svg>
               </button>
            </div>
         </div>
      </nav>
      <!--Container-->
      <div class="container w-full flex flex-wrap mx-auto px-2 pt-8 lg:pt-16 mt-16">
         <div class="w-full lg:w-1/5 lg:px-6 text-xl text-gray-800 leading-normal">
            <p class="text-base font-bold py-2 lg:pb-6 text-gray-700">Menu</p>
            <div class="block lg:hidden sticky inset-0">
               <button id="menu-toggle" class="flex w-full justify-end px-3 py-3 bg-white lg:bg-transparent border rounded border-gray-600 hover:border-purple-500 appearance-none focus:outline-none">
                  <svg class="fill-current h-3 float-right" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                  </svg>
               </button>
            </div>
            <div class="w-full sticky inset-0 hidden h-64 lg:h-auto overflow-x-hidden overflow-y-auto lg:overflow-y-hidden lg:block mt-0 border border-gray-400 lg:border-transparent bg-white shadow lg:shadow-none lg:bg-transparent z-20" style="top:5em;" id="menu-content">
               <ul class="list-reset">
                  <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                     <a href="/" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:border-purple-500 lg:hover:border-purple-500">
                     <span class="pb-1 md:pb-0 text-sm text-gray-900 font-bold">Home</span>
                     </a>
                  </li>
                  <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                     <a href="/emploie" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                     <span class="pb-1 md:pb-0 text-sm">Emploies</span>
                     </a>
                  </li>
                  <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                     <a href="/note" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                     <span class="pb-1 md:pb-0 text-sm">Notes</span>
                     </a>
                  </li>
                  <li class="py-2 md:my-0 hover:bg-purple-100 lg:hover:bg-transparent">
                     <a href="/avis" class="block pl-4 align-middle text-gray-700 no-underline hover:text-purple-500 border-l-4 border-transparent lg:hover:border-gray-400">
                     <span class="pb-1 md:pb-0 text-sm">Avis</span>
                     </a>
                  </li>

               </ul>
            </div>
         </div>
         <div class="w-full lg:w-4/5 p-8 mt-6 lg:mt-0 text-gray-900 leading-normal bg-white border border-gray-400 border-rounded">
            <!--Title-->
            <div class="font-sans">
               <h1 class="font-sans break-normal text-gray-900 pt-6 pb-2 text-xl">Dashboard Admin</h1>
               <hr class="border-b border-gray-400">
            </div>
             @if(session("msg"))
                 <div class="alert alert-primary" role="alert">{{session("msg")}}</div>
             @endif
            <div class="grid place-items-center mt-9">
              <form class="w-full max-w-lg" action="{{route("insertStudent")}}" method="post">
                  @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Le nom complet d'etudiant
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="NomComplet" name="NomComplet">
                  </div>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      CNE
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="CNE" name="cne">
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                      Fillière
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="fillière" name="filiere">
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                      Date Naissance
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="date" placeholder="Date Naissance" name="dateNaissance">
                  </div>

                </div>
                <div class="grid place-items-center mt-6">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                  Ajouter
                  </button>
                </div>
              </form>
            </div>
            <!-- Cards -->
            <div class="grid gap-6 mb-8 mt-8 md:grid-cols-2 xl:grid-cols-4">
                <!-- Card -->
                <div
                  class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
                >
                  <div
                    class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
                  >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                      <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                      ></path>
                    </svg>
                  </div>
                  <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400" >
                      Total Etudients
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                      {{$snapshot}}
                    </p>
                  </div>
                </div>
            </div>
            <!--Table-->
             <div class="w-full mt-6 overflow-hidden rounded-lg shadow-xs">
                 <div class="w-full overflow-x-auto">
                     <table class="w-full whitespace-no-wrap">
                         <thead>
                         <tr
                             class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                         >
                             <th class="px-4 py-3">ID</th>
                             <th class="px-4 py-3">Full Name Student</th>
                             <th class="px-4 py-3">CNE</th>
                         </tr>
                         </thead>
                         <tbody  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                         @foreach($students as $studentID=>$value)
                             <tr class="text-gray-700 dark:text-gray-400">
                                 <td class="px-4 py-3">{{$studentID}} </td>
                                 <td class="px-4 py-3 text-sm"> {{$value["fullName"]}}</td>
                                 <td class="px-4 py-3 text-xs">{{$value["cne"]}} </td>
                             </tr>
                         @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
			</pre>
         </div>
      </div>
      <!--/container-->
      <footer class="bg-white mt-6 border-t border-gray-400 shadow">
         <div class="container mx-auto flex py-8">
            <div class="w-full mx-auto flex flex-wrap">
               <div class="flex w-full lg:w-1/2 ">
                  <div class="px-8">
                     <h3 class="font-bold text-gray-900">About</h3>
                     <p class="py-4 text-gray-600 text-sm">
                        Admin dashbord pour l'application FP-BM
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script>
         /*Toggle dropdown list*/
         /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

         var navMenuDiv = document.getElementById("nav-content");
         var navMenu = document.getElementById("nav-toggle");

         var helpMenuDiv = document.getElementById("menu-content");
         var helpMenu = document.getElementById("menu-toggle");

         document.onclick = check;

         function check(e){
           var target = (e && e.target) || (event && event.srcElement);


           //Nav Menu
           if (!checkParent(target, navMenuDiv)) {
         	// click NOT on the menu
         	if (checkParent(target, navMenu)) {
         	  // click on the link
         	  if (navMenuDiv.classList.contains("hidden")) {
         		navMenuDiv.classList.remove("hidden");
         	  } else {navMenuDiv.classList.add("hidden");}
         	} else {
         	  // click both outside link and outside menu, hide menu
         	  navMenuDiv.classList.add("hidden");
         	}
           }

           //Help Menu
           if (!checkParent(target, helpMenuDiv)) {
         	// click NOT on the menu
         	if (checkParent(target, helpMenu)) {
         	  // click on the link
         	  if (helpMenuDiv.classList.contains("hidden")) {
         		helpMenuDiv.classList.remove("hidden");
         	  } else {helpMenuDiv.classList.add("hidden");}
         	} else {
         	  // click both outside link and outside menu, hide menu
         	  helpMenuDiv.classList.add("hidden");
         	}
           }

         }

         function checkParent(t, elm) {
           while(t.parentNode) {
         	if( t == elm ) {return true;}
         	t = t.parentNode;
           }
           return false;
         }


      </script>
   </body>
</html>