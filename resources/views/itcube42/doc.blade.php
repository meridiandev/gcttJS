<!-- ======= Frequently Documents Section ======= -->
<section id="doc" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Документы</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-10">
                <ul class="faq-list">
                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#docShow1">Документы<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        @foreach ($documents as $document)
                        <div id="docShow1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                @if ($document->show == '1')
                                    <a href="{{ $document->link_document }}">{{ $document->name }}</a>
                                @endif
                            </p>
                        </div>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
