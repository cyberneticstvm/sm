@extends("web.base")

@section("content")
<div role="main" class="main bggrey">
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-5 bg-eee">
                <h4 class="px-3 text-white">IEC/Capacity Building</h4>
            </div>
            <div class="col-lg-6">
                <img src="{{ public_path().'/web/img/sm/IEC2.jpg' }}" class="img-fluid" alt="iec" />
            </div>
            <div class="col-lg-3">
                <ul class="list list-icons list-icons-style-2">
                    <li class="bg-primary text-white"><i class="fas fa-wrench text-white"></i> IEC Tools</li>
                    <li class="bg-blue text-white"><i class="fa fa-pencil text-white"></i> IEC Updates</li>
                    <li class="bg-primary text-white"><i class="fa fa-bullhorn text-white"></i> Key Messages</li>
                    <li class="bg-blue text-white"><i class="far fa-building text-white"></i> Capacity Building</li>
                    <li class="bg-primary text-white"><i class="fa fa-volume-up text-white"></i> Online Radio</li>
                    <li class="bg-blue text-white"><i class="fa fa-question text-white"></i> FAQs?</li>
                    <li class="bg-primary text-white"><i class="fa fa-microphone text-white"></i> Dissemination on Air</li>
                </ul>
            </div>
            <div class="col-lg-3">
                <ul class="list list-icons list-icons-style-2">
                    <li class="bg-blue text-white"><i class="fa fa-comments text-white"></i> Facebook Posts & Trolls</li>
                    <li class="bg-primary text-white"><i class="fa fa-line-chart text-white"></i> Press Release</li>
                    <li class="bg-blue text-white"><i class="fa fa-file text-white"></i> Related News & articles</li>
                    <li class="bg-primary text-white"><i class="fa fa-file-pdf text-white"></i> News Letter</li>
                    <li class="bg-blue text-white"><i class="fa fa-play text-white"></i> News in Media</li>
                    <li class="bg-primary text-white"><i class="fa fa-user text-white"></i> Case Studies</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection