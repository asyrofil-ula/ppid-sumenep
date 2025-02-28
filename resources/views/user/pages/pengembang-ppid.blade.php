@extends('app')
@section('title', 'Tim Pengembang - PPID Kabupaten Sumenep')
@section('content')

<section class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-red-50 to-pink-50 py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden max-w-4xl mx-auto transform transition duration-300 hover:scale-102 hover:shadow-xl border border-red-100">
            
            <!-- Header -->
            <div class="bg-gradient-to-r from-red-600 to-red-500 py-6 px-8">
                <h2 class="text-3xl md:text-4xl font-bold text-center text-white">Pengembang PPID Kabupaten Sumenep</h2>
            </div>
            
            <!-- Team Members -->
            <div class="p-8">
                <h3 class="text-2xl font-bold text-center text-red-700 mb-6">IKP Diskominfo Sumenep</h3>
                
                <div class="flex justify-center gap-6 mb-6">
                    <!-- Developer 1 -->
                    <div class="bg-white rounded-lg p-4 border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-300">
                        <div class="text-center mb-3">
                            <div class="w-20 h-20 mx-auto bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 text-2xl font-bold">I</span>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-center text-gray-800">Irwan Sujatmiko </h4>
                        <p class="text-center text-red-600">Kepala Bidang IKP</p>
                    </div>
                </div>
                
                <!-- Contact Button -->
                {{-- <div class="mt-8 text-center">
                    <a href="#" class="inline-block bg-gradient-to-r from-red-600 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        Hubungi Tim Kami
                    </a>
                </div> --}}
            </div>
            
            <div class="p-8">
                <h3 class="text-2xl font-bold text-center text-red-700 mb-6">Tim Pengembang 1</h3>
                
                <div class="flex justify-center gap-6">
                    <!-- Developer 3 -->
                    <div class="bg-white rounded-lg p-4 border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-300">
                        <div class="text-center mb-3">
                            <div class="w-20 h-20 mx-auto bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 text-2xl font-bold">A</span>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-center text-gray-800">Achmad Rayhan Abror</h4>
                        <p class="text-center text-red-600">PENS</p>
                    </div>
                </div>
                
                <!-- Contact Button -->
                {{-- <div class="mt-8 text-center">
                    <a href="#" class="inline-block bg-gradient-to-r from-red-600 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        Hubungi Tim Kami
                    </a>
                </div> --}}
            </div>

            <div class="p-8">
                <h3 class="text-2xl font-bold text-center text-red-700 mb-6">Tim Pengembang 2</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Developer 1 -->
                    <a href="https://www.linkedin.com/in/ahmad-ramadani-bahri-30727931a/">
                    <div class="bg-white rounded-lg p-4 border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-300">
                        <div class="text-center mb-3">
                            <div class="w-20 h-20 mx-auto bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 text-2xl font-bold">A</span>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-center text-gray-800">Ahmad Ramadani Bahri</h4>
                        <p class="text-center text-red-600">UTM</p>
                    </div>
                    </a>
                    
                    <!-- Developer 2 -->
                    <a href="https://www.linkedin.com/in/adi-rahman2003/">
                    <div class="bg-white rounded-lg p-4 border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-300">
                        <div class="text-center mb-3">
                            <div class="w-20 h-20 mx-auto bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 text-2xl font-bold">A</span>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-center text-gray-800">Adi Rahman</h4>
                        <p class="text-center text-red-600">UTM</p>
                    </div>
                </a>
                    
                    <!-- Developer 3 -->
                    <a href="http://www.linkedin.com/in/syehrana-reza-pahlevi-putra-391326348">
                    <div class="bg-white rounded-lg p-4 border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-300">
                        <div class="text-center mb-3">
                            <div class="w-20 h-20 mx-auto bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 text-2xl font-bold">S</span>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-center text-gray-800">Syehrana Reza Putra</h4>
                        <p class="text-center text-red-600">UTM</p>
                    </div>
                    </a>
                </div>
                
                <!-- Contact Button -->
                {{-- <div class="mt-8 text-center">
                    <a href="#" class="inline-block bg-gradient-to-r from-red-600 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        Hubungi Tim Kami
                    </a>
                </div> --}}
            </div>
            <div class="p-8">
                <h3 class="text-2xl font-bold text-center text-red-700 mb-6">Tim Pengembang 3</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Developer 1 -->
                    <a href="https://asyrofilula.vercel.app/">
                    <div class="bg-white rounded-lg p-4 border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-300">
                        <div class="text-center mb-3">
                            <div class="w-20 h-20 mx-auto bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 text-2xl font-bold">A</span>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-center text-gray-800">Asyrofil 'Ula</h4>
                        <p class="text-center text-red-600">UNIBA Madura</p>
                    </div>
                    </a>
                    
                    <!-- Developer 2 -->
                    <a href="https://zarkasielnino.github.io/personal_portfolio/">
                    <div class="bg-white rounded-lg p-4 border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 hover:border-red-300">
                        <div class="text-center mb-3">
                            <div class="w-20 h-20 mx-auto bg-red-100 rounded-full flex items-center justify-center">
                                <span class="text-red-600 text-2xl font-bold">I</span>
                            </div>
                        </div>
                        <h4 class="text-xl font-bold text-center text-gray-800">Imam Zarkasyi</h4>
                        <p class="text-center text-red-600">UNIBA Madura</p>
                    </div>
                    </a>
                    
                </div>
                
                <!-- Contact Button -->
                {{-- <div class="mt-8 text-center">
                    <a href="#" class="inline-block bg-gradient-to-r from-red-600 to-red-500 text-white font-bold py-3 px-8 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        Hubungi Tim Kami
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection