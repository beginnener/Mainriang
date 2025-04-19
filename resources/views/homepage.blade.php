@extends('layout.app')

@section('content')
<section class="w-full overflow-hidden bg-white">
    {{-- banner --}}
    <div class="w-full">
        <img src="https://placehold.co/1928x608" alt="Banner" class="w-full h-auto object-cover" />
    </div>
    <div class="max-w-screen-xl mx-auto px-4 mt-12 mb-12 flex flex-col items-center gap-8">
        <!-- Heading -->
        <div class="w-full">
            <div class="w-full h-16 bg-gradient-to-l from-orange-400 to-amber-300 rounded-full flex justify-center items-center">
                <h2 class="font-['Poppins'] font-semibold text-white text-5xl text-center">PROGRAM</h2>
            </div>
        </div>
        <div class="w-full flex flex-wrap justify-center gap-8">
            <a href="#" class="w-80 h-80 bg-slate-50 rounded-[48px] flex flex-col items-center p-5 shadow-lg transition hover:scale-105 hover:shadow-xl duration-300">
                <span class="text-purple-950 font-['Fredoka'] font-extrabold text-4xl mt-2">Day Care</span>
                <img src="/icon/daycare - icon.svg" alt="Day Care" class="mt-auto" />
            </a>
            <a href="#" class="w-80 h-80 bg-slate-50 rounded-[48px] flex flex-col items-center p-5 shadow-lg transition hover:scale-105 hover:shadow-xl duration-300">
                <span class="text-purple-950 font-['Fredoka'] font-extrabold text-4xl mt-2">Play Group</span>
                <img src="/icon/playgroup - icon.svg" alt="Play Group" class="mt-auto" />
            </a>
            <a href="#" class="w-80 h-80 bg-slate-50 rounded-[48px] flex flex-col items-center p-5 shadow-lg transition hover:scale-105 hover:shadow-xl duration-300">
                <span class="text-purple-950 font-['Fredoka'] font-extrabold text-4xl mt-2">TK</span>
                <img src="/icon/tk - icon.svg" alt="TK" class="mt-auto" />
            </a>
        </div>
    </div>
</section>
    <div class="w-full h-auto relative bg-white overflow-hidden">
        <div class="w-[1418px] h-[577px] left-[-146px] top-[1391px] absolute">
            <div class="w-[844px] h-24 left-[146px] top-[1px] absolute orange-gradient rounded-tr-[48px] rounded-br-[48px]"></div>
            <div class="w-[1116px] h-[472px] left-[216px] top-[105px] absolute bg-purple-500 rounded-[48px]"></div>
            <div class="w-[500px] h-28 left-[330px] top-[1px] absolute justify-center text-4xl heading-1 leading-[105px]">
                Mengapa MainRiang?
            </div>
            <img class="w-[452px] h-[480px] left-[1043px] top-[48px] absolute rounded-tl-[226px] rounded-tr-[226px] rounded-br-[226px] shadow-[15px_4px_4px_0px_rgba(255,152,78,1.00)]" src="https://placehold.co/452x480" />
            <div class="w-[646px] h-96 left-[330px] top-[133px] absolute justify-center text-white text-2xl font-medium font-Poppins leading-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum felis leo, ac venenatis mauris 
                accumsan at. Nunc non faucibus mauris. Sed ipsum elit, fringilla id sodales eget, dictum et mauris. 
                Morbi congue finibus mi, at euismod tortor semper non. Vestibulum tincidunt nisi eget lorem ullamcorper 
                tincidunt.</div>
            <div class="left-[330px] top-[474px] absolute justify-center text-white text-2xl font-medium font-['Poppins'] underline leading-9">Selengkapnya →</div>
        </div>  
        <div class="w-[781px] left-[475px] top-[2117px] absolute inline-flex flex-col justify-center items-end gap-14">
            <div class="text-right justify-center text-ungu-2 text-6xl font-bold font-['Fredoka']">Trilogi<br/>MainRiang</div>
            <div class="w-[781px] inline-flex justify-start items-center gap-28">
                <div class="w-44 inline-flex flex-col justify-start items-start gap-4">
                    <div class="self-stretch justify-center text-ungu-2 text-3xl font-bold font-['Poppins'] leading-9">Gembira Beraksi</div>
                    <div class="self-stretch h-60 justify-start text-black text-2xl font-medium font-['Poppins'] leading-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum felis leo.</div>
                </div>
                <div class="w-44 inline-flex flex-col justify-start items-start gap-4">
                    <div class="self-stretch justify-center text-ungu-2 text-3xl font-bold font-['Poppins'] leading-9">Islamic Behaviour</div>
                    <div class="self-stretch h-60 justify-start text-black text-2xl font-medium font-['Poppins'] leading-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum felis leo.</div>
                </div>
                <div class="w-44 inline-flex flex-col justify-start items-start gap-4">
                    <div class="self-stretch justify-center text-ungu-2 text-3xl font-bold font-['Poppins'] leading-9">5 Basic<br/>Areas</div>
                    <div class="self-stretch h-60 justify-start text-black text-2xl font-medium font-['Poppins'] leading-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum felis leo.</div>
                </div>
            </div>
            <div class="w-60 h-14 bg-ungu rounded-[55px]"></div>
            <div class="justify-center text-white text-2xl font-medium font-['Poppins'] leading-9">Selengkapnya</div>
        </div>
        
        {{-- svg bunga --}}
        <div class="w-[610.66px] top-[2110px] relative">
            <svg width="643" height="639" viewBox="0 0 643 639" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g transform="rotate(48, 321.5, 319.5) translate(-200, 230)">
                    <path d="M421.747 104.196C421.747 161.741 322.761 279.183 322.761 279.183C322.761 279.183 223.776 161.741 223.776 104.196C223.776 46.65 268.093 0 322.761 0C377.43 0 421.747 46.65 421.747 104.196Z" fill="#FF984E"/>
                    <path d="M154.007 168.354C209.352 183.979 295.403 311.143 295.403 311.143C295.403 311.143 155.555 374.53 100.21 358.905C44.8656 343.28 12.0429 287.957 26.8986 235.338C41.7543 182.718 98.6629 152.729 154.007 168.354Z" fill="#FF984E"/>
                    <path d="M488.07 168.292C432.725 183.917 346.674 311.081 346.674 311.081C346.674 311.081 486.522 374.468 541.867 358.843C597.212 343.218 630.034 287.895 615.179 235.276C600.323 182.656 543.414 152.667 488.07 168.292Z" fill="#FF984E"/>
                    <path d="M121.962 431.382C156.256 385.172 305.733 349.854 305.733 349.854C305.733 349.854 315.232 503.153 280.938 549.363C246.643 595.574 183.254 606.624 139.354 574.044C95.4544 541.464 87.6675 477.593 121.962 431.382Z" fill="#FF984E"/>
                    <path d="M352.333 550.013C321.953 501.14 344.022 349.141 344.022 349.141C344.022 349.141 490.09 396.627 520.469 445.5C550.849 494.373 537.837 557.389 491.408 586.249C444.978 615.11 382.712 598.886 352.333 550.013Z" fill="#FF984E"/>
                </g>
            </svg>
        </div>

        <div class="w-[1350px] h-96 left-[45px] top-[2821px] absolute">
            <div class="w-36 h-9 left-[602.16px] top-[-3.21px] absolute text-center justify-center text-slate-900 text-3xl font-bold font-['Poppins'] leading-loose">Testimoni</div>
            <div class="w-80 h-6 left-[522.16px] top-[37.79px] absolute text-center justify-center text-slate-900 text-base font-normal font-['Poppins'] leading-normal">Apa Kata Mereka tentang Main Riang?</div>
            <div class="w-[1326px] h-80 left-[12px] top-[85.59px] absolute overflow-hidden">
                <div class="w-96 h-64 left-0 top-[6.73px] absolute opacity-50 bg-slate-50 rounded-lg">
                    <div class="w-16 h-16 left-[179.55px] top-[22.80px] absolute bg-slate-50 rounded-[30.40px] overflow-hidden">
                        <img class="w-16 h-16 left-0 top-0 absolute blur-[0px]" src="https://placehold.co/61x61" />
                    </div>
                    <div class="w-96 h-24 left-[22.80px] top-[91.20px] absolute overflow-hidden">
                        <div class="w-96 h-5 left-[7.61px] top-[0.95px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">So far, aku sebagai orang tua merasa puas, karena</div>
                        <div class="w-80 h-5 left-[14.06px] top-[23.75px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">kita difasilitasi konsultasi dengan Psikolog untuk</div>
                        <div class="w-96 h-5 left-[8.37px] top-[46.55px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">mengetahui tumbuh kembang anak dan ini murni</div>
                        <div class="w-44 h-5 left-[100.52px] top-[69.35px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">fokus di Montessori ya...</div>
                    </div>
                    <div class="w-20 h-5 left-[167.62px] top-[190.95px] absolute text-center justify-center text-slate-900 text-base font-semibold font-['Noto_Sans'] leading-normal">Mom Nurul</div>
                    <div class="w-20 h-5 left-[170.94px] top-[213.75px] absolute text-center justify-center text-purple-800 text-sm font-medium font-['Noto_Sans'] leading-tight">Bunda Abim</div>
                    <div class="w-6 h-6 left-[22.80px] top-[24.43px] absolute">
                        <div class="w-6 h-6 left-0 top-0 absolute overflow-hidden">
                            <div class="w-6 h-6 left-0 top-0 absolute"></div>
                            <div class="w-4 h-3 left-[2.85px] top-[4.58px] absolute bg-purple-800/50"></div>
                        </div>
                    </div>
                </div>
                <div class="w-96 h-64 left-[442px] top-0 absolute bg-slate-50 rounded-lg">
                    <div class="w-16 h-16 left-[189px] top-[24px] absolute bg-slate-50 rounded-[32px] overflow-hidden">
                        <img class="w-16 h-16 left-0 top-0 absolute blur-[0px]" src="https://placehold.co/64x64" />
                    </div>
                    <div class="w-96 h-24 left-[24px] top-[96px] absolute overflow-hidden">
                        <div class="w-96 h-24 left-[7.88px] top-[1px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">Setelah sharing dengan teman. Saya memutuskan<br/>untuk mendaftarkan Alkeema ke Mainriang. Guru<br/>gurunya baik banget. Kegiatan yang dilakukan<br/>berdasarkan assesment Psikolog.</div>
                    </div>
                    <div class="w-24 h-6 left-[176.50px] top-[200px] absolute text-center justify-center text-slate-900 text-base font-semibold font-['Noto_Sans'] leading-normal">Mom Windi</div>
                    <div class="w-24 h-5 left-[176.31px] top-[224px] absolute text-center justify-center text-purple-800 text-sm font-medium font-['Noto_Sans'] leading-tight">Bunda Mema</div>
                    <div class="w-6 h-6 left-[24px] top-[25.72px] absolute">
                        <div class="w-6 h-6 left-0 top-0 absolute overflow-hidden">
                            <div class="w-6 h-6 left-0 top-0 absolute"></div>
                            <div class="w-4 h-3.5 left-[3px] top-[4.82px] absolute bg-purple-800/50"></div>
                        </div>
                    </div>
                </div>
                <div class="w-96 h-60 left-[906.10px] top-[6.13px] absolute opacity-50 bg-slate-50 rounded-lg">
                    <div class="w-16 h-16 left-[179.55px] top-[22.80px] absolute bg-slate-50 rounded-[30.40px] overflow-hidden">
                        <img class="w-16 h-16 left-0 top-0 absolute blur-[0px]" src="https://placehold.co/61x61" />
                    </div>
                    <div class="w-96 h-16 left-[22.80px] top-[91.20px] absolute overflow-hidden">
                        <div class="w-96 h-5 left-[3.61px] top-[0.95px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">Alhamdulillah, Happy anaknya. Hari pertama sudah</div>
                        <div class="w-80 h-5 left-[14.44px] top-[23.75px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">bisa langsung ditinggal karena banyak kegiatan.</div>
                        <div class="w-56 h-5 left-[76.96px] top-[46.55px] absolute text-center justify-center text-gray-500 text-base font-normal font-['Noto_Sans'] leading-normal">Malah seneng dianya.. he.. he..</div>
                    </div>
                    <div class="w-24 h-5 left-[159.32px] top-[168.15px] absolute text-center justify-center text-slate-900 text-base font-semibold font-['Noto_Sans'] leading-normal">Mom Nadhifa</div>
                    <div class="w-24 h-5 left-[163.31px] top-[190.95px] absolute text-center justify-center text-purple-800 text-sm font-medium font-['Noto_Sans'] leading-tight">Bunda Arrasya</div>
                    <div class="w-6 h-6 left-[22.80px] top-[24.43px] absolute">
                        <div class="w-6 h-6 left-0 top-0 absolute overflow-hidden">
                            <div class="w-6 h-6 left-0 top-0 absolute"></div>
                            <div class="w-4 h-3 left-[2.85px] top-[4.58px] absolute bg-purple-800/50"></div>
                        </div>
                    </div>
                </div>
                <div class="w-2 h-2 left-[643px] top-[293px] absolute bg-purple-800 rounded"></div>
                <div class="w-2 h-2 left-[659px] top-[293px] absolute opacity-20 bg-ungu-2 rounded"></div>
                <div class="w-2 h-2 left-[675px] top-[293px] absolute opacity-20 bg-ungu-2 rounded"></div>
            </div>
        </div>
        <div class="w-[1440px] h-[869px] left-0 top-[3224px] absolute bg-slate-50">
            <div class="w-[1350px] h-[788.59px] left-[45px] top-[80px] absolute">
                <div class="w-52 h-9 left-[571.16px] top-[-3px] absolute text-center justify-center text-slate-900 text-3xl font-bold font-['Noto_Sans'] leading-loose">Lokasi Sekolah</div>
                <div class="w-[600px] h-12 left-[375px] top-[37.60px] absolute">
                    <div class="w-[565.10px] h-11 left-[17.55px] top-[1px] absolute text-center justify-center text-slate-900 text-base font-normal font-['Noto_Sans'] leading-normal">Terletak di lokasi strategis, sekolah kami memberikan akses mudah kepada<br/>siswa-siswa kami untuk mendapatkan pendidikan berkualitas.</div>
                </div>
                <div class="w-[1326px] h-[679px] left-[12px] top-[109.60px] absolute bg-slate-50 rounded-lg shadow-2xl overflow-hidden">
                    <div class="w-[1294px] h-[647px] left-[16px] top-[16px] absolute bg-slate-50 rounded-lg overflow-hidden">
                        <div class="w-[1294px] h-[647px] left-0 top-0 absolute bg-zinc-500 overflow-hidden">
                            <div class="w-[1294px] h-[647px] left-0 top-0 absolute bg-stone-200 overflow-hidden">
                                <img class="w-64 h-64 left-[717px] top-[298.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[461px] top-[298.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[1229px] top-[554.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[973px] top-[42.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[-51px] top-[42.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[717px] top-[42.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[973px] top-[554.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[461px] top-[-213.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[1229px] top-[-213.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[461px] top-[42.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[205px] top-[554.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[1229px] top-[42.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[973px] top-[298.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[461px] top-[554.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[205px] top-[-213.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[1229px] top-[298.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[717px] top-[-213.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[973px] top-[-213.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[-51px] top-[-213.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[-51px] top-[298.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[205px] top-[42.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[717px] top-[554.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[205px] top-[298.50px] absolute" src="https://placehold.co/256x256" />
                                <img class="w-64 h-64 left-[-51px] top-[554.50px] absolute" src="https://placehold.co/256x256" />
                                <div class="w-72 h-32 left-[10px] top-[10px] absolute bg-slate-50 rounded-sm shadow-[0px_1px_4px_-1px_rgba(0,0,0,0.30)] overflow-hidden">
                                    <div class="w-48 h-4 left-[12px] top-[10px] absolute overflow-hidden">
                                        <div class="w-48 h-4 left-0 top-0 absolute justify-center text-ungu-2 text-sm font-medium font-['Roboto']">Main Riang Islamic Preschool …</div>
                                    </div>
                                    <div class="w-48 h-10 left-[12px] top-[32px] absolute justify-center text-zinc-600 text-xs font-normal font-['Roboto']">Jl. Babakan Radio, Sukaraja, Kec.<br/>Cicendo, Kota Bandung, Jawa Barat<br/>40175</div>
                                    <div class="w-6 h-10 left-[228.73px] top-[10px] absolute">
                                        <img class="w-5 h-5 left-[1.16px] top-0 absolute" src="https://placehold.co/22x22" />
                                        <div class="w-6 h-3.5 left-0 top-[27px] absolute overflow-hidden">
                                            <div class="w-6 h-3.5 left-0 top-0 absolute text-center justify-center text-blue-600 text-xs font-normal font-['Roboto']">Rute</div>
                                        </div>
                                    </div>
                                    <div class="w-5 h-4 left-[12px] top-[79px] absolute justify-center text-zinc-600 text-sm font-medium font-['Roboto']">5,0</div>
                                    <div class="w-14 h-3.5 left-[34.03px] top-[81px] absolute">
                                        <img class="w-2.5 h-2.5 left-0 top-0 absolute" src="https://placehold.co/11x11" />
                                        <img class="w-2.5 h-2.5 left-[11px] top-0 absolute" src="https://placehold.co/11x11" />
                                        <img class="w-2.5 h-2.5 left-[22px] top-0 absolute" src="https://placehold.co/11x11" />
                                        <img class="w-2.5 h-2.5 left-[33px] top-0 absolute" src="https://placehold.co/11x11" />
                                        <img class="w-2.5 h-2.5 left-[44px] top-0 absolute" src="https://placehold.co/11x11" />
                                    </div>
                                    <div class="w-14 h-3.5 left-[92.02px] top-[81px] absolute">
                                        <div class="w-11 h-3.5 left-[8px] top-0 absolute justify-center text-blue-600 text-xs font-normal font-['Roboto']">4 ulasan</div>
                                    </div>
                                    <div class="w-28 h-3.5 left-[12px] top-[105px] absolute">
                                        <div class="w-28 h-3.5 left-0 top-0 absolute justify-center text-blue-600 text-xs font-normal font-['Roboto']">Lihat peta lebih besar</div>
                                    </div>
                                </div>
                                <div class="w-10 h-20 left-[1244px] top-[542px] absolute bg-slate-50 rounded-sm shadow-[0px_1px_4px_-1px_rgba(0,0,0,0.30)] overflow-hidden">
                                    <div class="w-10 h-10 left-0 top-0 absolute bg-slate-50 overflow-hidden">
                                        <div class="w-7 h-7 left-[6px] top-[6px] absolute overflow-hidden">
                                            <div class="w-7 h-7 left-0 top-0 absolute overflow-hidden">
                                                <div class="w-7 h-7 left-0 top-0 absolute overflow-hidden">
                                                    <div class="w-4 h-4 left-[5.83px] top-[5.83px] absolute bg-stone-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-7 h-px left-[5px] top-[40px] absolute bg-neutral-200"></div>
                                    <div class="w-10 h-10 left-0 top-[41px] absolute bg-slate-50 overflow-hidden">
                                        <div class="w-7 h-7 left-[6px] top-[6px] absolute overflow-hidden">
                                            <div class="w-7 h-7 left-0 top-0 absolute overflow-hidden">
                                                <div class="w-7 h-7 left-0 top-0 absolute overflow-hidden">
                                                    <div class="w-4 h-0.5 left-[5.83px] top-[12.83px] absolute bg-stone-500"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-12 h-5 left-[621px] top-[610.15px] absolute overflow-hidden">
                                    <div class="w-12 h-5 left-0 top-0 absolute overflow-hidden">
                                        <div class="w-12 h-5 left-[0.02px] top-0 absolute overflow-hidden">
                                            <div class="w-3 h-3 left-[2.41px] top-[2.97px] absolute bg-slate-50 outline outline-offset-[-0.56px] outline-slate-50"></div>
                                            <div class="w-2 h-2 left-[14.51px] top-[7.07px] absolute bg-slate-50 outline outline-offset-[-0.56px] outline-slate-50"></div>
                                            <div class="w-2 h-2 left-[22.69px] top-[7.07px] absolute bg-slate-50 outline outline-offset-[-0.56px] outline-slate-50"></div>
                                            <div class="w-3 h-4 left-[30.89px] top-[3.37px] absolute bg-slate-50 outline outline-offset-[-0.56px] outline-slate-50"></div>
                                            <div class="w-2 h-2 left-[41.80px] top-[7.08px] absolute bg-slate-50 outline outline-offset-[-0.56px] outline-slate-50"></div>
                                            <div class="w-3 h-3 left-[2.97px] top-[3.54px] absolute bg-blue-500"></div>
                                            <div class="w-2 h-2 left-[15.07px] top-[7.64px] absolute bg-red-500"></div>
                                            <div class="w-2 h-2 left-[23.26px] top-[7.64px] absolute bg-yellow-500"></div>
                                            <div class="w-2 h-2.5 left-[31.45px] top-[7.63px] absolute bg-blue-500"></div>
                                            <div class="w-[1.63px] h-2.5 left-[39.79px] top-[3.93px] absolute bg-green-600"></div>
                                            <div class="w-1.5 h-2 left-[42.36px] top-[7.64px] absolute bg-red-500"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-10 h-10 left-[10px] top-[594px] absolute bg-slate-50 rounded-[3px] shadow-[0px_2px_6px_0px_rgba(0,0,0,0.30)] outline outline-offset-[-2px] outline-slate-50 overflow-hidden">
                                    <div class="w-9 h-9 left-[2px] top-[2px] absolute bg-stone-200 overflow-hidden">
                                        <img class="w-64 h-64 left-[-153px] top-[-31px] absolute" src="https://placehold.co/256x256" />
                                    </div>
                                </div>
                                <div class="w-32 h-3.5 left-[1171.63px] top-[633px] absolute opacity-70 bg-neutral-100"></div>
                                <div class="w-28 h-2.5 left-[1176.63px] top-[634.09px] absolute">
                                    <div class="w-28 h-2.5 left-0 top-0 absolute text-right justify-center text-ungu-2 text-[10px] font-normal font-['Roboto'] leading-none">Laporkan kesalahan peta</div>
                                </div>
                                <div class="w-24 h-3.5 left-[924.70px] top-[633px] absolute opacity-70 bg-neutral-100"></div>
                                <div class="w-20 h-3.5 left-[929.70px] top-[633.09px] absolute text-center justify-center text-ungu-2 text-[10px] font-normal font-['Roboto'] leading-none">Pintasan keyboard</div>
                                <div class="w-20 h-3.5 left-[1018.92px] top-[633px] absolute opacity-70 bg-neutral-100"></div>
                                <div class="w-20 h-2.5 left-[1023.92px] top-[634.09px] absolute text-right justify-center text-ungu-2 text-[10px] font-normal font-['Roboto'] leading-none">Data peta ©2025</div>
                                <div class="w-16 h-3.5 left-[1106.56px] top-[633px] absolute opacity-70 bg-neutral-100"></div>
                                <div class="w-14 h-2.5 left-[1111.56px] top-[634.09px] absolute">
                                    <div class="w-14 h-2.5 left-0 top-0 absolute text-right justify-center text-ungu-2 text-[10px] font-normal font-['Roboto'] leading-none">Persyaratan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection