 <!-- sidebar start -->

 <div class="fixed flex flex-col justify-between left-0 top-0 h-full bg-sky-300 shadow-md z-10" id="sidebar">
     <div class="">
         <div class="text-white h-32 font-bold text-base uppercase text-center py-5 bg-sky-900">
            <i class="fa-solid fa-money-bill-wheat text-5xl mb-1"></i>
            <h1>IDA</h1>
         </div>
         <div class="py-10">
             <a href="{{ route('dashboard.index') }}"
                 class="flex items-center my-1 pl-4 py-3 {{ request()->routeIs('dashboard.*') ? 'text-white bg-sky-900 border-sky-900' : '' }}">
                 <svg class="w-5 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M10 0C4.48596 0 0 4.48626 0 10C0 15.5137 4.48596 20 10 20C15.514 20 20 15.514 20 10C20 4.48596 15.514 0 10 0ZM10 19.5369C4.74121 19.5369 0.463106 15.2588 0.463106 10.0003C0.463106 4.7418 4.74121 0.463698 10 0.463698C15.2588 0.463698 19.5369 4.74121 19.5369 10C19.5369 15.2588 15.2585 19.5369 10 19.5369Z"
                         fill="white" />
                     <path
                         d="M10 1.88794C5.38021 1.88794 1.62207 5.64668 1.62207 10.2662C1.62207 11.0885 1.74258 11.9042 1.97976 12.6907L2.2504 12.85C3.9148 12.4884 5.74176 12.2507 7.68005 12.1435C7.7061 12.142 7.73009 12.1337 7.75289 12.1245L8.69183 14.4957C8.67821 14.5076 8.66548 14.5209 8.6563 14.5375C8.50766 14.8052 8.42889 15.1092 8.42889 15.4166C8.42889 16.4154 9.24169 17.2285 10.241 17.2285C11.2401 17.2285 12.0529 16.4157 12.0529 15.4166C12.0529 14.7231 11.6668 14.101 11.045 13.7928C10.9647 13.7534 10.8676 13.7863 10.8279 13.8659C10.7882 13.9465 10.8208 14.0433 10.9014 14.0833C11.4118 14.3364 11.7287 14.8475 11.7287 15.4169C11.7287 16.2371 11.0612 16.9042 10.241 16.9042C9.42084 16.9042 8.75342 16.2371 8.75342 15.4169C8.75342 15.2381 8.78747 15.0607 8.84965 14.8943L9.13036 15.6029C9.18425 15.8246 9.3936 16.0381 9.66335 16.1462C9.79008 16.1971 9.92184 16.222 10.0539 16.222C10.2541 16.222 10.4534 16.1643 10.6331 16.0512C11.2511 15.7275 11.2362 15.0746 11.0769 14.7296L7.61342 8.19228C7.43902 7.81415 7.02862 7.63116 6.69817 7.78306C6.53383 7.85857 6.4148 8.00425 6.36357 8.19287C6.31501 8.37083 6.33337 8.56685 6.41184 8.73622L7.57996 11.686C6.11751 11.7695 4.7202 11.9288 3.40432 12.1571C3.2838 11.6351 3.21955 11.1086 3.21955 10.5883C3.21955 10.4361 3.23228 10.2872 3.24176 10.1374C3.26574 10.1516 3.29239 10.162 3.32259 10.162H4.34385C4.43327 10.162 4.50582 10.0897 4.50582 9.99999C4.50582 9.91056 4.43327 9.83802 4.34385 9.83802H3.32259C3.30038 9.83802 3.27906 9.84246 3.25982 9.85075C3.4434 8.10137 4.27486 6.55097 5.49925 5.44444C5.50695 5.46635 5.51849 5.48737 5.53626 5.50514L6.04763 6.01621C6.07931 6.04789 6.12077 6.06388 6.16222 6.06388C6.20368 6.06388 6.24513 6.04789 6.27711 6.01621C6.34048 5.95285 6.34048 5.85039 6.27681 5.78703L5.76515 5.27595C5.75241 5.26293 5.73672 5.25434 5.72132 5.24694C6.83586 4.32487 8.24353 3.76316 9.77675 3.72556V4.74563C9.77675 4.83535 9.8493 4.9076 9.93872 4.9076C10.0281 4.9076 10.101 4.83535 10.101 4.74563V3.72556C11.8418 3.7682 13.4191 4.48891 14.5911 5.64164L13.8775 6.25665C13.8097 6.31498 13.802 6.41743 13.8603 6.48554C13.8923 6.52255 13.9379 6.5418 13.9832 6.5418C14.0208 6.5418 14.0584 6.52877 14.0889 6.50241L14.8158 5.87586C15.7959 6.9362 16.453 8.31101 16.6161 9.83802H15.9846C15.8951 9.83802 15.8223 9.91056 15.8223 9.99999C15.8223 10.0897 15.8948 10.162 15.9846 10.162H16.6372C16.6458 10.3038 16.6582 10.4444 16.6582 10.5883C16.6582 11.0965 16.5966 11.6108 16.4814 12.1213C14.7839 11.8083 13.0777 11.6235 10.7554 11.6235C10.6275 11.6235 10.5238 11.7275 10.5238 11.8554C10.5238 11.9833 10.6275 12.0869 10.7554 12.0869C13.6548 12.0869 15.5813 12.3789 17.7493 12.85L18.0203 12.6907C18.2577 11.9042 18.378 11.0885 18.378 10.2662C18.378 5.64668 14.6195 1.88794 10 1.88794ZM6.70942 8.60889C6.65938 8.50022 6.64753 8.38267 6.67626 8.27815C6.70202 8.18369 6.75798 8.11262 6.83378 8.07739C6.86843 8.0614 6.90544 8.05429 6.94334 8.05429C7.08666 8.05429 7.24211 8.16237 7.32265 8.33648L10.7865 14.8738C10.8623 15.0385 10.9552 15.5205 10.4776 15.7669L10.4646 15.7743C10.1771 15.9591 9.91503 15.899 9.78416 15.8457C9.58547 15.7657 9.4691 15.6245 9.4386 15.5051L6.70942 8.60889ZM17.6359 12.3519C17.3549 12.2918 17.0772 12.2353 16.8003 12.1817C16.9191 11.6516 16.9824 11.1172 16.9824 10.5886C16.9824 10.3905 16.9727 10.1948 16.957 10.0009V9.99999C16.957 9.99969 16.9567 9.9991 16.9567 9.9988C16.819 8.2743 16.0846 6.72035 14.9642 5.55311C14.9612 5.54896 14.9603 5.54393 14.9568 5.54008C14.9518 5.53416 14.9449 5.53149 14.939 5.52646C13.6619 4.20969 11.8921 3.39274 9.93843 3.39274C6.05444 3.39274 2.89472 6.62056 2.89472 10.5886C2.89472 11.129 2.96135 11.6756 3.08541 12.2172C2.84409 12.2616 2.59951 12.3031 2.3644 12.3522C2.17904 11.673 2.08518 10.9721 2.08518 10.2662C2.08518 5.90192 5.63575 2.35164 10 2.35164C14.3643 2.35164 17.9149 5.90192 17.9149 10.2662C17.9149 10.9721 17.821 11.6727 17.6359 12.3519Z"
                         fill="white" />
                     <path
                         d="M16.2727 15.5282C15.6082 16.2368 14.8404 16.8104 13.9731 17.248C13.7854 17.3428 13.9506 17.6247 14.1381 17.5302C15.029 17.0807 15.8211 16.4873 16.5036 15.7595C16.6472 15.6058 16.4169 15.3743 16.2727 15.5282Z"
                         fill="white" />
                     <path
                         d="M17.3685 14.1188C17.2252 14.4182 17.0375 14.6838 16.8009 14.9168C16.6508 15.0645 16.882 15.2958 17.0319 15.148C17.2871 14.897 17.4958 14.6068 17.6507 14.2837C17.741 14.0948 17.4597 13.9287 17.3685 14.1188Z"
                         fill="white" />
                 </svg>
                 Dashboard</a>
             <a href="{{route('cashin.index')}}"
                 class="flex items-center my-1 pl-4 py-3 {{ request()->routeIs('cashin.*') ? 'text-white bg-sky-900 border-sky-900' : '' }}">
                 <svg class="w-5 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M14.5273 5.625L18.5547 6.68359L19.5703 2.65625L18.7969 2.45312L18.1367 4.96484C16.4492 2.24219 13.4375 0.429688 10 0.429688C4.71484 0.429688 0.429688 4.71484 0.429688 10C0.429688 15.2852 4.71484 19.5703 10 19.5703C13.5273 19.5703 16.6055 17.6641 18.2656 14.8242L17.5742 14.4492C16.0469 17.043 13.2266 18.7852 10 18.7852C5.14844 18.7852 1.21484 14.8516 1.21484 10C1.21484 5.14844 5.14844 1.21484 10 1.21484C13.2539 1.21484 16.0977 2.98438 17.6133 5.61719L14.7305 4.85156L14.5273 5.625Z"
                         fill="black" />
                     <path
                         d="M10.4219 14.2461V13.5156C11.1133 13.4766 11.6406 13.2734 12.0469 12.9062C12.4531 12.5391 12.6562 12.0508 12.6562 11.4844C12.6562 10.875 12.4922 10.4258 12.1289 10.1406C11.7617 9.81641 11.2344 9.57031 10.4609 9.41016H10.4219V7.53906C10.9492 7.62109 11.3984 7.78125 11.8438 8.10938L12.4961 7.21484C11.8438 6.76562 11.1523 6.52344 10.4219 6.48437V5.99609H9.8125V6.48437C9.20312 6.52344 8.67188 6.72656 8.26563 7.09375C7.85938 7.46094 7.65625 7.94922 7.65625 8.51562C7.65625 9.08203 7.82031 9.53125 8.18359 9.81641C8.50781 10.1016 9.07813 10.3437 9.80859 10.5078V12.418C9.23828 12.3359 8.66797 12.0508 8.10156 11.5625L7.37109 12.418C8.10156 13.0703 8.91797 13.4336 9.8125 13.5156V14.2461H10.4219ZM10.4609 10.707C10.8672 10.8281 11.1133 10.9492 11.2734 11.0742C11.3945 11.2383 11.4766 11.3984 11.4766 11.6445C11.4766 11.8906 11.3945 12.0508 11.1914 12.2148C10.9883 12.3789 10.7422 12.457 10.4609 12.5V10.707ZM9.03906 8.96094C8.91797 8.83984 8.83594 8.63672 8.83594 8.43359C8.83594 8.19141 8.91797 8.02734 9.07812 7.86328C9.28125 7.69922 9.48438 7.62109 9.80859 7.57812V9.32812C9.40234 9.20312 9.16016 9.08203 9.03906 8.96094Z"
                         fill="black" />
                 </svg>
                 Cash In
             </a>

             <a href="{{route('loan.index')}}"
                 class="flex items-center my-1 pl-4 py-3 {{ request()->routeIs('loan.*') ? 'text-white bg-sky-900 border-sky-900' : '' }}">
                 <svg class="w-5 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M13.6114 4.27732C13.6114 2.5333 12.1935 1.11432 10.4506 1.11432C8.707 1.11432 7.28802 2.5333 7.28802 4.27732C7.28802 6.02024 8.7066 7.43892 10.4506 7.43892C12.1935 7.43882 13.6114 6.01984 13.6114 4.27732ZM10.4505 6.93422C8.98398 6.93422 7.79243 5.74236 7.79243 4.27692C7.79243 2.81108 8.98398 1.61852 10.4505 1.61852C11.9164 1.61852 13.1082 2.81108 13.1082 4.27692C13.1079 5.74276 11.916 6.93422 10.4505 6.93422Z"
                         fill="#010002" />
                     <path
                         d="M10.6376 3.96617C10.2213 3.78881 10.1537 3.69328 10.1537 3.53241C10.1537 3.39542 10.2156 3.23235 10.5135 3.23235C10.7877 3.23235 10.9626 3.33247 11.0473 3.38143L11.1539 3.44218L11.3452 2.93548L11.2669 2.89082C11.0981 2.79609 10.9174 2.74064 10.7154 2.72095V2.26321H10.2123V2.74703C9.78494 2.85145 9.51425 3.1712 9.51425 3.58307C9.51315 4.09297 9.93512 4.32798 10.3471 4.48995C10.7047 4.63444 10.7788 4.77713 10.7788 4.94659C10.7788 5.04242 10.7469 5.12505 10.6861 5.1858C10.5045 5.36856 10.0424 5.30771 9.75097 5.11496L9.63906 5.04202L9.4552 5.55411L9.52025 5.59988C9.68442 5.71719 9.93112 5.79762 10.1836 5.8194V6.28893H10.6867V5.78683C11.1291 5.68351 11.4219 5.33978 11.4219 4.90922C11.4228 4.47257 11.1875 4.18999 10.6376 3.96617Z"
                         fill="#010002" />
                     <path
                         d="M14.5616 5.91113C13.2187 5.91113 12.1252 7.00397 12.1252 8.34571C12.1252 9.68855 13.2191 10.7799 14.5616 10.7799C15.904 10.7799 16.9961 9.68845 16.9961 8.34571C16.9957 7.00397 15.9043 5.91113 14.5616 5.91113ZM14.5616 10.3472C13.4569 10.3472 12.5586 9.44934 12.5586 8.34571C12.5586 7.24208 13.4569 6.34419 14.5616 6.34419C15.6651 6.34419 16.5624 7.24208 16.5624 8.34571C16.5624 9.44934 15.6651 10.3472 14.5616 10.3472Z"
                         fill="#010002" />
                     <path
                         d="M14.7129 8.0868C14.4093 7.95731 14.3606 7.89016 14.3606 7.77815C14.3606 7.64225 14.4443 7.57361 14.6084 7.57361C14.8105 7.57361 14.9367 7.64545 15.0039 7.68442L15.1104 7.74417L15.2724 7.31251L15.1952 7.26785C15.0711 7.19741 14.9374 7.15374 14.7886 7.13735V6.78543H14.3534V7.16163C14.033 7.24747 13.8232 7.50207 13.8232 7.81712C13.8232 8.2205 14.1525 8.40535 14.4732 8.53235C14.7339 8.63677 14.7865 8.73439 14.7851 8.85739C14.7851 8.92244 14.7643 8.979 14.7243 9.02047C14.5952 9.14846 14.2566 9.1052 14.0417 8.96401L13.9305 8.89107L13.7721 9.32802L13.8361 9.37349C13.9602 9.46182 14.144 9.52367 14.3333 9.54445V9.90527H14.7649L14.767 9.51727C15.1053 9.43034 15.327 9.16285 15.327 8.82822C15.3269 8.39116 14.9974 8.20201 14.7129 8.0868Z"
                         fill="#010002" />
                     <path d="M0 17.2511H3.15301V10.9984H0V17.2511ZM0.628304 11.6271H2.52431V16.6229H0.628304V11.6271Z"
                         fill="#010002" />
                     <path
                         d="M19.9142 14.8616C19.8001 14.6201 18.6997 12.4077 17.4071 12.638C17.0502 12.7035 16.7394 13.0296 16.3088 13.4805C15.5761 14.2511 14.5716 15.3079 12.9689 15.3079C11.9915 15.3079 10.888 14.9113 9.67788 14.126L12.1872 14.1249C12.1872 14.1249 12.2123 14.127 12.2537 14.127C12.9117 14.127 13.3366 13.7694 13.3366 13.2148V12.1745L13.3302 12.1122C13.2572 11.7439 12.9268 11.0477 12.2081 11.0477H3.71619V17.0668L3.93571 17.1362C4.16383 17.2066 9.52859 18.8824 11.49 18.8824C11.49 18.8824 11.5465 18.8856 11.652 18.8856C12.4966 18.8856 16.8609 18.7075 19.8683 15.1987L19.9999 15.0442L19.9142 14.8616ZM11.6521 18.2581C11.5685 18.2581 11.5216 18.256 11.504 18.256C9.84195 18.256 5.38727 16.9239 4.34449 16.6057V11.6768H12.2075C12.5433 11.6768 12.6781 12.1026 12.7074 12.2117V13.2152C12.7074 13.4501 12.4607 13.4991 12.2528 13.4991L7.7542 13.498L8.49801 14.062C10.1355 15.3061 11.6399 15.9365 12.9688 15.9365C14.8398 15.9365 15.9991 14.72 16.7644 13.9143C17.0448 13.6185 17.3634 13.2846 17.5197 13.2552C18.1298 13.1555 18.8603 14.1868 19.2551 14.9463C16.4315 18.0961 12.4349 18.2581 11.6521 18.2581Z"
                         fill="#010002" />
                 </svg>
                 Loan
             </a>
             <a href="#" class="flex items-center my-1 pl-4 py-3 border-1-4 hover:bg-sky-900 hover:text-white">
                 <svg class="w-5 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M17.2219 8.43631C16.9516 8.79894 16.6422 9.12003 16.303 9.39055C17.7401 10.3073 18.6952 11.9156 18.6952 13.743C18.6952 14.3361 17.8249 14.7451 17.3062 14.9361C16.9017 15.0851 16.426 15.2071 15.9062 15.2992C15.923 15.5188 15.9317 15.7407 15.9317 15.9646C15.9317 16.1583 15.9148 16.3841 15.8657 16.6299C16.5643 16.5214 17.2058 16.3634 17.757 16.1605C19.6109 15.478 20 14.4691 20 13.743C19.9999 11.5478 18.8997 9.605 17.2219 8.43631Z"
                         fill="black" />
                     <path
                         d="M13.5364 0.658752C12.7216 0.658752 11.9528 0.982152 11.3303 1.57837C11.5753 1.89203 11.7893 2.23091 11.9711 2.58937C12.3882 2.11357 12.9364 1.82384 13.5364 1.82384C14.8391 1.82384 15.899 3.18737 15.899 4.86334C15.899 6.53932 14.8391 7.90285 13.5364 7.90285C13.1445 7.90285 12.775 7.77877 12.4493 7.56066C12.3435 7.94612 12.2046 8.31828 12.0348 8.67251C12.4977 8.93137 13.0073 9.06798 13.5364 9.06798C15.5296 9.06798 17.0641 7.14132 17.0641 4.86334C17.0641 2.58515 15.5293 0.658752 13.5364 0.658752Z"
                         fill="black" />
                     <path
                         d="M11.3076 9.84116C11.0255 10.198 10.7255 10.4974 10.413 10.7498C12.1892 11.8095 13.3816 13.7503 13.3816 15.9645C13.3816 16.7124 12.3333 17.2101 11.7084 17.4401C10.5766 17.8569 8.9747 18.0959 7.31351 18.0959C5.65232 18.0959 4.05042 17.8569 2.91856 17.4401C2.29368 17.2101 1.24537 16.7124 1.24537 15.9645C1.24537 13.7502 2.43776 11.8095 4.21394 10.7498C3.9015 10.4974 3.60146 10.198 3.31933 9.84116C1.32226 11.1483 0 13.4047 0 15.9646C0 16.7529 0.431693 17.8516 2.48826 18.6088C3.77107 19.0812 5.48471 19.3413 7.31347 19.3413C9.14222 19.3413 10.8559 19.0812 12.1387 18.6088C14.1952 17.8516 14.6269 16.7529 14.6269 15.9646C14.6269 13.4047 13.3047 11.1483 11.3076 9.84116Z"
                         fill="black" />
                     <path
                         d="M7.31349 10.5581C9.61865 10.5581 11.3932 8.32985 11.3932 5.6956C11.3932 3.0613 9.61843 0.833115 7.31349 0.833115C5.00868 0.833115 3.23376 3.06086 3.23376 5.6956C3.23376 8.33037 5.00885 10.5581 7.31349 10.5581ZM7.31349 2.07844C8.87639 2.07844 10.1479 3.70109 10.1479 5.69555C10.1479 7.69001 8.87635 9.31266 7.31349 9.31266C5.75064 9.31266 4.47913 7.69001 4.47913 5.69555C4.47913 3.70109 5.75064 2.07844 7.31349 2.07844Z"
                         fill="black" />
                 </svg>
                 Users
             </a>
             <a href="{{ route('activity.index') }}" class="flex items-center my-1 pl-4 py-3 border-1-4 hover:bg-sky-900 hover:text-white">
                 <svg class="w-5 mr-2" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g clip-path="url(#clip0_4_198)">
                         <path
                             d="M18.3976 4.51323C18.3976 4.50913 18.3935 4.50094 18.3935 4.49684C18.3935 4.48864 18.3894 4.48454 18.3894 4.47635C18.3894 4.47225 18.3853 4.46405 18.3853 4.45995C18.3853 4.45585 18.3812 4.44766 18.3771 4.44356C18.373 4.43946 18.373 4.43126 18.3689 4.42717C18.3648 4.42307 18.3648 4.41487 18.3607 4.41077C18.3566 4.40667 18.3566 4.39848 18.3525 4.39438C18.3484 4.38618 18.3443 4.37799 18.3361 4.36979C18.332 4.36569 18.332 4.36159 18.3279 4.35749C18.3238 4.3493 18.3156 4.3411 18.3115 4.337L14.9386 0.151716C14.9304 0.139421 14.9181 0.131225 14.9099 0.11893C14.9058 0.114831 14.9058 0.11483 14.9017 0.11483C14.8935 0.106633 14.8853 0.0984375 14.8771 0.0902407C14.873 0.0861424 14.8689 0.0861419 14.8648 0.0820435C14.8566 0.0779451 14.8484 0.0697474 14.8402 0.0656491C14.8361 0.0615507 14.832 0.0615527 14.8279 0.0574543C14.8197 0.053356 14.8115 0.0492556 14.8033 0.0451573C14.7992 0.0410589 14.7951 0.0410609 14.791 0.0369625C14.7828 0.0328642 14.7746 0.0287638 14.7623 0.0246655C14.7582 0.0246655 14.7541 0.0205681 14.75 0.0205681C14.7418 0.0164697 14.7295 0.0164692 14.7213 0.0123709C14.7172 0.0123709 14.7131 0.00827352 14.709 0.00827352C14.6967 0.00417515 14.6886 0.00417365 14.6763 0.00417365C14.6722 0.00417365 14.6681 0.00417365 14.664 0.00417365C14.6476 0.00417365 14.6353 7.62939e-05 14.6189 7.62939e-05H3.70904C3.48363 7.62939e-05 3.29921 0.184544 3.29921 0.409995V2.09475H2.00822C1.78281 2.09475 1.59839 2.27922 1.59839 2.50467V19.5901C1.59839 19.8156 1.78281 20 2.00822 20H16.3197C16.5451 20 16.7295 19.8156 16.7295 19.5901V17.9053H17.9918C18.2172 17.9053 18.4017 17.7209 18.4017 17.4954V4.5911C18.4017 4.57881 18.4017 4.56651 18.4017 4.55421C18.4017 4.55012 18.4017 4.54602 18.4017 4.53782C18.4017 4.52963 18.4017 4.52143 18.3976 4.51323ZM15.0287 1.5659L17.1353 4.18118H15.0287V1.5659ZM14.3279 4.85344L15.459 6.24717H13.3566V3.65647L14.2746 4.78786C14.291 4.81245 14.3074 4.83294 14.3279 4.85344ZM4.11888 0.815731H14.209V3.40233L13.2664 2.24225C13.2582 2.22995 13.2459 2.22176 13.2377 2.20946C13.2336 2.20536 13.2336 2.20536 13.2295 2.20126C13.2213 2.19307 13.2131 2.18897 13.2049 2.18077C13.2008 2.17667 13.1967 2.17667 13.1927 2.17258C13.1845 2.16848 13.1763 2.16028 13.1681 2.15618C13.164 2.15208 13.1599 2.15208 13.1558 2.14799C13.1476 2.14389 13.1394 2.13979 13.1312 2.13569C13.1271 2.13159 13.123 2.13159 13.1189 2.13159C13.1107 2.12749 13.0984 2.1234 13.0902 2.1193C13.0861 2.1193 13.082 2.1152 13.0779 2.1152C13.0697 2.1111 13.0574 2.1111 13.0492 2.107C13.0451 2.107 13.041 2.10291 13.0369 2.10291C13.0246 2.09881 13.0164 2.09881 13.0041 2.09881C13 2.09881 12.9959 2.09881 12.9918 2.09881C12.9754 2.09881 12.9631 2.09471 12.9467 2.09471H4.11888V0.815731ZM2.41806 19.1802V2.91045H12.5369V6.65713C12.5369 6.88258 12.7213 7.06704 12.9467 7.06704H15.9099V19.1802H2.41806V19.1802ZM17.582 17.0895H16.7295V17.0854V6.65299C16.7295 6.64069 16.7295 6.6284 16.7295 6.6161C16.7295 6.612 16.7295 6.6079 16.7295 6.59971C16.7295 6.59151 16.7295 6.58332 16.7254 6.57512C16.7254 6.57102 16.7213 6.56282 16.7213 6.55872C16.7213 6.55053 16.7172 6.54643 16.7172 6.53823C16.7172 6.53004 16.7131 6.52594 16.7131 6.52184C16.7131 6.51774 16.709 6.50954 16.7049 6.50545C16.7008 6.50135 16.7008 6.49315 16.6967 6.48905C16.6927 6.48495 16.6927 6.47676 16.6886 6.47266C16.6845 6.46856 16.6845 6.46036 16.6804 6.45626C16.6763 6.44807 16.6722 6.43987 16.6681 6.43577C16.664 6.43167 16.664 6.42758 16.6599 6.42758C16.6517 6.41938 16.6476 6.40708 16.6394 6.39889L15.5082 5.00516H17.582V17.0895Z"
                             fill="black" />
                         <path
                             d="M13.3566 8.74361H4.97136C4.74595 8.74361 4.56152 8.92807 4.56152 9.15353C4.56152 9.37898 4.74595 9.56344 4.97136 9.56344H13.3566C13.582 9.56344 13.7664 9.37898 13.7664 9.15353C13.7664 8.92807 13.582 8.74361 13.3566 8.74361Z"
                             fill="black" />
                         <path
                             d="M13.3566 11.2441H4.97136C4.74595 11.2441 4.56152 11.4286 4.56152 11.654C4.56152 11.8795 4.74595 12.0639 4.97136 12.0639H13.3566C13.582 12.0639 13.7664 11.8795 13.7664 11.654C13.7664 11.4286 13.582 11.2441 13.3566 11.2441Z"
                             fill="black" />
                         <path
                             d="M13.3566 13.7446H4.97136C4.74595 13.7446 4.56152 13.9291 4.56152 14.1545C4.56152 14.38 4.74595 14.5645 4.97136 14.5645H13.3566C13.582 14.5645 13.7664 14.38 13.7664 14.1545C13.7664 13.9291 13.582 13.7446 13.3566 13.7446Z"
                             fill="black" />
                         <path
                             d="M13.3566 16.2451H4.97136C4.74595 16.2451 4.56152 16.4296 4.56152 16.655C4.56152 16.8805 4.74595 17.065 4.97136 17.065H13.3566C13.582 17.065 13.7664 16.8805 13.7664 16.655C13.7664 16.4296 13.582 16.2451 13.3566 16.2451Z"
                             fill="black" />
                     </g>
                     <defs>
                         <clipPath id="clip0_4_198">
                             <rect width="20" height="20" fill="white" />
                         </clipPath>
                     </defs>
                 </svg>
                 Activity
             </a>
         </div>
     </div>
     <div class="flex flex-col items-center justify-center w-full bg-sky-900 py-8 text-white">
         <div class="">&copy; copyright 2022</div>
         <div class="">All Rights Reserved</div>


     </div>
 </div>
