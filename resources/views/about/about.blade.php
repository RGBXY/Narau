@extends('layouts.layouts')

@section('content')
<section id="about" class="about">
    <div class="about-con-wrap container">
        <div class="about-con-1">
            <div class="text-center mb-4">
                <h3 class="title-about mb-2">ABOUT NARAU</h3>
                <p>Grows Like an Orchid</p>
            </div>
            <div class="about-content pt-3 container d-flex align-items-center">
                <div class="text-wraper-about">
                    <h1>Narau adalah</h1>
                    <p>Website pembelajaran daring yang didedikasikan untuk menyediakan artikel-artikel berkualitas tinggi untuk meningkatkan pengetahuan dan keterampilan Anda. Kami berkomitmen untuk memberikan konten yang informatif, mendalam, dan mudah dipahami agar Anda dapat memperoleh pemahaman yang kuat dalam berbagai bidang pembelajaran.</p>
                    <p>Narau juga adalah tempat yang asyik buat belajar tanpa bosenin! Kita nggak cuma ngebahas hal-hal serius, tapi juga yang kekinian dan bikin kalian mikir. </p>
                </div>
                <div class="img-wrap-1" style="">
                    <img class="img-fluid" src="{{asset('assets/img/about.jpg')}}" alt="">
                </div>
            </div>
        </div>

        <div class="about-con-2 py-3">
            <div class="about-content-2 pt-3 container d-flex align-items-center">
                <div class="img-wrap-2 d-flex align-items-center">
                    <img class="img-fluid" src="{{asset('assets/img/about-img.jpg')}}" alt="">
                </div>
                <div class="text-wraper-about-2">
                    <div class="tit-about-wrap">
                        <h1>Narau juga</h1>
                    </div>
                    <p>Memiliki sebuah arti belajar bersama dalam bahasa jepang, jadi di Narau ini kita gak akan ngerasa belajar sendirian. Dan juga Narau bisa jadi tempat nongkrong yang bermanfaat buat orang-orang yang mau mekar dan berkembang layaknya bunga anggrek.</p>
                    <p>Kenapa harus bunga anggrek? Karena kami mempunyai sebuah harapan supaya setiap orang yang belajar di Narau akan berkembang layaknya bunga anggrek yang indah dan membedakannya dari yang lain.</p>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <h1 class="title-about text-center mb-4">KEUNGGULAN</h1>
                <div class="about-list d-flex justify-content-center">
                    <div class="about-list-wrap d-flex w-100 flex-wrap">
                        <div class="box p-4 border border-2 rounded shadow bg-white d-flex align-items-center flex-column">
                            <div style="margin-bottom: 1.5rem" class="border border-2 rounded-circle p-1">
                                <img width="130" height="130" src="{{asset('assets/icon/about-1.png')}}" alt="">
                            </div>
                            <h3 class="mb-3">Diversitas Topik</h3>
                            <p class="text-center">Narau menawarkan rangkaian artikel yang mencakup berbagai topik pembelajaran, mulai dari sains dan teknologi hingga seni dan humaniora. Kami mencoba untuk mencakup seluruh spektrum minat pembaca kami.</p>
                        </div>
                        <div class="box p-4 border border-2 rounded shadow bg-white d-flex align-items-center flex-column">
                            <div style="margin-bottom: 1.5rem" class="border border-2 rounded-circle p-1">
                                <img width="130" height="130" src="{{asset('assets/icon/about-2.png')}}" alt="">
                            </div>
                            <h3 class="mb-3">Materi Berkualitas</h3>
                            <p class="text-center">Kami memastikan bahwa setiap artikel yang kami publikasikan memenuhi standar kualitas tinggi. Informasi yang disajikan diolah secara cermat dan sesuai dengan perkembangan terkini.</p>
                        </div>
                        <div class="box p-4 border border-2 rounded shadow bg-white d-flex align-items-center flex-column">
                            <div style="margin-bottom: 1.5rem" class="border border-2 rounded-circle p-1">
                                <img width="130" height="130" src="{{asset('assets/icon/about-3.png')}}" alt="">
                            </div>
                            <h3 class="mb-3">Fleksibilitas Akses</h3>
                            <p class="text-center">Semua artikel dapat diakses secara daring, memberikan fleksibilitas kepada pengguna untuk belajar sesuai dengan jadwal mereka sendiri. Ini memungkinkan Anda belajar di mana pun dan kapan pun Anda inginkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-con-3 d-flex align-items-center justify-content-center flex-column">
            <div class="text-center">
                <h3 class="title-about mb-2">NARAU</h3>
                <p>Grows Like an Orchid</p>
            </div>
            <div class="about-quote d-flex text-center">
                <h1>Mekar dan berkembang lah layaknya bunga anggrek, karena itu yang membedakanmu dari yang lain</h1>
            </div>
        </div>
    </div>
</section>
@endsection
