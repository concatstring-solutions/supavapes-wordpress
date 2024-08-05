<?php
$bubble_text = 'Hello 👋<br>Chat now via Whatsapp';	// use <br> for line break
$whatsup_number = '15819938781'; // your whatapp number
$whatsup_message='Hello👋 %0D%0A I have a question about your product on supavapes.com.';  // use %0D%0A for line break
?>
<div class="whatsapp-footer">	
<?php if ($bubble_text) { ?> 
    <div class="whatsappallmessage">
    <!-- <div class="whatsappclose" ><button class="whatsappclose-button" onclick="whatsapp(this)"> &times; </button></div> -->
    <a href="<?php echo esc_url("https://api.whatsapp.com/send?phone=".$whatsup_number."&text=".$whatsup_message ); ?>" class="whatsapp-icon"><p class="whatsapptext"><?php echo wp_kses_post($bubble_text); ?></p>	</a>
    </div>	
<?php }	 ?>
<a href="<?php echo esc_url("https://api.whatsapp.com/send?phone=".esc_attr($whatsup_number)."&text=".esc_attr($whatsup_message)); ?>" class="whatsapp-icon">
<svg width="513" height="513" viewBox="0 0 513 513" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M465.065 0.429688H48.0758C21.8392 0.429688 0.570312 21.6986 0.570312 47.9351V464.924C0.570312 491.161 21.8392 512.43 48.0758 512.43H465.065C491.301 512.43 512.57 491.161 512.57 464.924V47.9351C512.57 21.6986 491.301 0.429688 465.065 0.429688Z" fill="url(#paint0_linear_734_29)"/>
    <path d="M369.444 143.555C342.81 116.655 307.439 100.158 269.712 97.0397C231.985 93.9215 194.386 104.388 163.696 126.55C133.007 148.713 111.247 181.112 102.342 217.906C93.4367 254.699 97.9728 293.463 115.132 327.206L98.2881 408.981C98.1133 409.795 98.1084 410.636 98.2736 411.452C98.4387 412.268 98.7705 413.041 99.2481 413.723C99.9477 414.757 100.946 415.554 102.111 416.006C103.275 416.459 104.55 416.545 105.764 416.254L185.91 397.257C219.558 413.982 258.049 418.226 294.533 409.235C331.017 400.244 363.128 378.601 385.152 348.157C407.176 317.712 417.685 280.442 414.809 242.976C411.933 205.511 395.858 170.281 369.444 143.555ZM344.455 343.003C326.027 361.379 302.297 373.51 276.608 377.685C250.92 381.86 224.57 377.87 201.27 366.275L190.099 360.748L140.964 372.385L141.11 371.774L151.292 322.319L145.823 311.526C133.917 288.145 129.718 261.596 133.825 235.682C137.933 209.768 150.136 185.818 168.688 167.265C191.999 143.961 223.611 130.87 256.572 130.87C289.533 130.87 321.145 143.961 344.455 167.265C344.654 167.492 344.868 167.706 345.095 167.905C368.117 191.268 380.969 222.785 380.849 255.585C380.729 288.385 367.647 319.808 344.455 343.003Z" fill="white"/>
    <path d="M340.091 306.73C334.069 316.214 324.556 327.821 312.6 330.701C291.655 335.763 259.509 330.875 219.509 293.581L219.015 293.145C183.844 260.534 174.709 233.392 176.92 211.865C178.142 199.646 188.324 188.592 196.906 181.377C198.262 180.219 199.871 179.395 201.604 178.97C203.336 178.545 205.144 178.531 206.882 178.93C208.621 179.328 210.242 180.128 211.616 181.265C212.991 182.403 214.08 183.846 214.796 185.479L227.742 214.57C228.583 216.456 228.895 218.536 228.644 220.586C228.393 222.636 227.588 224.579 226.316 226.206L219.771 234.701C218.367 236.455 217.519 238.589 217.338 240.829C217.156 243.068 217.649 245.311 218.753 247.268C222.418 253.697 231.204 263.152 240.949 271.908C251.887 281.799 264.018 290.846 271.698 293.93C273.753 294.77 276.013 294.974 278.185 294.518C280.358 294.062 282.344 292.965 283.887 291.37L291.48 283.719C292.945 282.274 294.767 281.244 296.76 280.733C298.753 280.222 300.846 280.249 302.826 280.81L333.575 289.537C335.271 290.058 336.826 290.959 338.12 292.172C339.414 293.386 340.414 294.879 341.043 296.538C341.672 298.197 341.913 299.978 341.748 301.744C341.583 303.511 341.016 305.216 340.091 306.73Z" fill="white"/>
    <defs>
    <linearGradient id="paint0_linear_734_29" x1="256.57" y1="2.52423" x2="256.57" y2="487.644" gradientUnits="userSpaceOnUse">
    <stop stop-color="#35DB23"/>
    <stop offset="1" stop-color="#27A11A"/>
    </linearGradient>
    </defs>
</svg>
</a>
</div>