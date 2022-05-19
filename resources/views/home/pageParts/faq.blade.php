
<div class="containerFaq">
    <h2 class="faq-heading">Sıkça Sorulan Sorular</h2>

    @foreach($faqs as $faq)
        <details class="faq-card">
            <summary>{{ $faq->question }} <span class="faq-open-icon">+</span></summary>
            <span class="faq-card-spoiler">{{ $faq->answer }}</span>
        </details>
    @endforeach

    <h2 class="faq-heading">Hala sorularınız mı var?</h2>
    <p class="faq-aftertext">Eğer aradığınız sorunun cevabını Sıkça Sorulan Sorular kısmıda bulamadıysanız<br>
        bizimle iletişime geçin. Kısa bir süre sonra size dönüş yapcağız :)
    </p>
</div>
