<x-frontend-app-layout :title="'All Blogs'">
    <section class="page-title">
        <div class="bg-layer"
            style="background-image: url({{ asset('frontend/assets/images/background/page-title.jpg') }})"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>All Blogs</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>All Blogs</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="research-page-section sec-pad">
        <div class="auto-container">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-warning">No Blogs Available Right Now</h2>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
