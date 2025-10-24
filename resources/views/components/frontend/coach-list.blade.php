<section id="team" class="team section fitnessign-light-background">
    <div class="container title-description text-justify" data-aos="fade-up">
        @if(request()->is('instructors/poundfit'))
            <p>Nikmati pengalaman fitness penuh energi dengan kelas PoundFit. Dirancang untuk meningkatkan stamina, koordinasi, dan mood kamu melalui gerakan ritmis yang powerful. Poundfit olahraga yang mulai populer di Amerika Serikat pada tahun 2011 yang di populerkan oleh Kirsten Potenza dan Cristina Preenboom (keduanya dikenal sebagai fommer drummers). Dalam kelas poundfit, peserta menggunakan Ripxtick stick drum khusus yang lebih ringan dari stick drum biasa. kelas Poundfit ini bisa diikuti 20 lebih peserta. </p>
        @elseif(request()->is('instructors/zumba'))
            <p>Kelas Zumba membawa kamu ke dunia penuh irama, di mana setiap gerakan membawa kebugaran dan kebahagiaan. Dengan kombinasi dance, cardio, dan kekuatan tubuh,Zumba bukan hanya latihan fisik, tapi juga pelepasan energi yang menyegarkan pikiran.Cocok untuk siapa pun yang ingin fit, happy, dan percaya diri dengan cara yang menyenangkan, Nikmati pengalaman kebugaran yang penuh semangat dan jadikan setiap sesi Zumba sebagai perayaan tubuh dan energi kamu.  </p>
        @elseif(request()->is('instructors/aerobic'))
            <p>Kelas Aerobic adalah latihan kebugaran yang memadukan musik upbeat, gerakan dinamis, dan suasana penuh semangat. Aerobic cocok untuk semua usia dan level kebugaran, Dengan kombinasi gerakan ringan, musik ceria, dan suasana positif, kamu akan merasa bugar, segar, dan bahagia setelah kelas. Setiap sesi dipandu oleh instruktur berpengalaman untuk membantu kamu mencapai hasil maksimal dengan teknik yang benar dan rasakan manfaatnya.</p>
        @elseif(request()->is('instructors/body combat'))
            <p>Kelas Body Combat adalah latihan intens yang terinspirasi dari berbagai seni bela diri seperti karate, taekwondo, boxing, dan muaythai tanpa kontak fisik. Gerakan cepat dan musik yang menghentak akan membuat kamu membakar kalori, memperkuat otot, dan meningkatkan rasa percaya diri. Setiap pukulan dan tendangan diiringi musik dinamis yang memacu semangat, Bukan hanya melatih tubuh, tapi juga mental oleh karena itu di Body Combat kamu belajar melawan rasa lelah dan keluar sebagai pemenang, Bersiaplah rasakan keseruannya dan biarkan musik memimpin setiap pukulanmu. </p>
        @elseif(request()->is('trainer/advance'))
            <p>Personal Training (Advance) Fitnessign adalah para profesional berpengalaman lebih dari 3 tahun dibidang kebugaran Fitness, siap mendapingi anda mencapai tujuan kesehatan dan performa terbaik dalam kehidupan anda. Kami percaya bahwa setiap orang memiliki kebutuhan dan kemampuan yang berbeda, maka karena itu para Personal Training kami siap memberikan bimbingan yang aman menyenangkan, dan sesuai dengan level anda. Apapun usia dan tujuan anda, Team Advance Personal Training Fitnessign siap menjadi partner dalam perjalan menuju hidup sehat dan bugar. </p>
        @elseif(request()->is('trainer/prime'))
            <p>Personal Training (Prime) Fitnessign adalah para Profesional berpengalaman lebih dari 10 tahun di bidang dunia kebugaran fitness yang meliputi fisotheraphy maupun Hydrotheraphy, siap mendapingi anda mencapai tujuan kesehatan dan performa terbaik dalam kehidupan yang lebih baik dan bugar yang kalian inginkan. Kami percaya bahwa setiap orang memiliki kebutuhan dan kemampuan yang berbeda, maka kerana itu para persoanal training kami qualifield prime menyediakan latiahna yang berbeda dari segi program latihan dan sesi nutrition oleh Personal Training kami siap menjadi partnert perjalanan menuju hidup sehat dan bugar yang kalian inginkan.   </p>
        @else
            <p>Coach Advance Fitnessign ialah pelatih yang sudah berada ditingkat level yang sudah melewati tahap dasar dan menengah ditingkat level profesional dibidang 5 tahun lebih didunia fitness, tentunya coach Advace Fitnessign bersertifikasi dan memiliki program yang menarik untuk kamu pada saat latihan bersama kami dan tentunya memberikan program yang menarik, tantangan baru dan aman. Berikut List Coach Fitnessign kami :</p>
        @endif
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/FOTO PT BACKGROUND.jpeg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Suroso</h4>
                        <span>Certified :</span>
                        <span> Specialist : </span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/PERSONAL TRAINER WANITA.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Rudi</h4>
                        <span>Certified :</span>
                        <span>Specialist :</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/personal PT3.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Cahyono</h4>
                        <span>Certified :</span>
                        <span>Specialist :</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/FOTO PT BACKGROUND.jpeg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Suroso</h4>
                        <span>Certified :</span>
                        <span> Specialist : </span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/PERSONAL TRAINER WANITA.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Rudi</h4>
                        <span>Certified :</span>
                        <span>Specialist :</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/personal PT3.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Cahyono</h4>
                        <span>Certified :</span>
                        <span>Specialist :</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/FOTO PT BACKGROUND.jpeg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Suroso</h4>
                        <span>Certified :</span>
                        <span> Specialist : </span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/PERSONAL TRAINER WANITA.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Rudi</h4>
                        <span>Certified :</span>
                        <span>Specialist :</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="pic"><img style="height: 420px; width: 100%; object-fit: cover;" src="/frontend/assets/img/team/personal PT3.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                        <h4>Lord Cahyono</h4>
                        <span>Certified :</span>
                        <span>Specialist :</span>
                        <div class="social">
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
