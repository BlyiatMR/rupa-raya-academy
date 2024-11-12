<template>
    <div>
        <nav id="nav" class=" w-full top-0 z-[999] py-4 px-5 lg:px-12 shadow-2xl">
            <div class="max-w-[1440px] mx-auto flex justify-between items-center">
                <div>
                    <img class="w-32" src="http://ruparaya-academy.test/public/assets/logo/rralogo-outline.png" alt="">
                </div>
                <div class="md:flex gap-10 hidden text-[#273F5A] text-[15px] font-semibold">
                    <a href="./index.php" class="hover:text-[#5386C0] duration-300">Beranda</a>
                    <a href="./listing.php" class="hover:text-[#5386C0] duration-300">Kursus/Kelas</a>
                    <a href="./about.php" class="hover:text-[#5386C0] duration-300">Tentang Kami</a>
                    <a href="./testimonial.php" class="hover:text-[#5386C0] duration-300">Testimonial</a>
                </div>
                <div class="md:hidden block">
                    <div id="resNav" class="rounded-md px-2 text-black">
                        <i class="resBtn fas fa-bars"></i>
                    </div>
                    <div id="resMenu"
                        class="fixed top-0 right-0 rounded-bl-[45px] p-10 bg-blue-rpr-thr-a2 text-white hidden resGoDown z-50">
                        <div id="resNavClose" class="inline absolute rounded-md right-5 text-white">
                            <i class="fas fa-x"></i>
                        </div>
                        <div class="block"></div>
                        <div class="mb-8">
                            <a class="mr-6 block border-b py-3" href="./index.php">Beranda</a>
                            <a class="mr-6 block border-b py-3" href="./listing.php">Program/Kelas</a>
                            <a class="mr-6 block border-b py-3" href="./about.php">Tentang Kami</a>
                            <a class="mr-6 block border-b py-3" href="./testimonial.php">Testimonial</a>
                        </div>
                        <div class="flex flex-col items-start w-full">
                            <div class="flex gap-5 mb-4">
                                <a href="https://www.instagram.com/ruparaya.academy?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" aria-label="Instagram">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/eea0de67ff265db660885ad6d3abd371357cf57f513dccf68ddbc96fde317182?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                                        alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                                </a>
                                <a href="https://www.tiktok.com/@ruparaya.academy?is_from_webapp=1&sender_device=pc"
                                    target="_blank" aria-label="TikTok">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/c64d2ccd0f03d7da6e9fc2e58102a09ef727773fe900bc12fcdb7d3a23e25c5b?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                                        alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                                </a>
                                <a href="https://www.youtube.com/@RupaRayaAcademy" target="_blank" aria-label="YouTube">
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/d042807ef59e5e09ff5748ddd5e28c69601bd7d0cb7b2f5fb2af68aae79242e7?placeholderIfAbsent=true&apiKey=a5b7adda52cd4e0d82e5d20df8441ceb"
                                        alt="" class="object-contain shrink-0 rounded-full aspect-square w-[35px]" />
                                </a>
                            </div>
                            <div class="text-sm">
                                Copyright © 2024 Rupa Raya <br> Indonesia. All Rights Reserved
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>