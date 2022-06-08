<style>
    /* small */

    @media (max-width:600px) {
        .susan-storm-small {
            display: none!important
        }
        source {
            width: 310;
            height: 175;
        }
    }
    /* medium */

    @media (max-width:992px) and (min-width:601px) {
        .susan-storm-medium {
            display: none!important
        }
        source {
            width: 515;
            height: 290;
        }
    }
    /* large */

    @media (min-width:993px) {
        .susan-storm-large {
            display: none!important
        }
        source {
            width: 607;
            height: 342;
        }
    }

    @keyframes summaryOpen {
        from {
            opacity: 0
        }
        to {
            opacity: 1
        }
    }

    .faq {
        background: #f8f9fa
    }

    .faq__grid {
        margin: 0 auto;
        display: grid
    }

    @media(max-width: calc(600px - 1px)) {
        .faq__grid {
            padding: 0 24px;
            max-width: 600px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .faq__grid {
            padding: 0 min(5vw, 72px);
            max-width: 600px
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .faq__grid {
            padding: 0 min(5vw, 72px)
        }
    }

    @media(min-width: 1440px) {
        .faq__grid {
            max-width: 1600px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .faq__grid {
            --grid-column-gap: 24px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .faq__grid {
            --grid-column-gap: 24px
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .faq__grid {
            --grid-column-gap: 44px
        }
    }

    @media(min-width: 1440px) {
        .faq__grid {
            --grid-column-gap: 64px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .faq__grid {
            column-gap: 24px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .faq__grid {
            column-gap: 24px
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .faq__grid {
            column-gap: 44px
        }
    }

    @media(min-width: 1440px) {
        .faq__grid {
            column-gap: 64px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .faq__grid {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .faq__grid {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .faq__grid {
            grid-template-columns: repeat(12, 1fr)
        }
    }

    @media(min-width: 1440px) {
        .faq__grid {
            grid-template-columns: repeat(12, 1fr)
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .faq__grid__chapter {
            grid-column-start: 1;
            grid-column-end: span 4
        }
    }

    @media(min-width: 1024px) {
        .faq__grid__chapter {
            grid-column-start: 1;
            grid-column-end: span 5;
            padding-right: var(--grid-column-gap)
        }
    }

    @media(min-width: 1440px) {
        .faq__grid__chapter {
            grid-column-start: 2;
            grid-column-end: span 4;
            padding-right: var(--grid-column-gap)
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .faq__grid__chapter__title {
            color: #202124;
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-weight: 500;
            margin-bottom: 12px
        }
    }

    @media(max-width: calc(1024px - 1px))and (max-width: calc(1024px - 1px)) {
        .faq__grid__chapter__title {
            font-size: 28px;
            line-height: 32px
        }
    }

    @media(max-width: calc(1024px - 1px))and (min-width: 1024px) {
        .faq__grid__chapter__title {
            font-size: 56px;
            line-height: 58px
        }
    }

    @media(min-width: 1024px) {
        .faq__grid__chapter__title {
            color: #202124;
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-size: 42px;
            line-height: 52px;
            letter-spacing: -0.43px;
            font-weight: 500;
            margin-bottom: 60px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .faq__grid__chapter__card {
            display: none
        }
    }

    .faq__grid__mobile-card {
        grid-column-start: 1;
        grid-column-end: span 4;
        margin-top: 36px
    }

    @media(min-width: 1024px) {
        .faq__grid__mobile-card {
            display: none
        }
    }

    .faq__grid__mobile-card,
    .faq__grid__chapter__card {
        background: #fff;
        border: 1px solid #dadce0;
        border-radius: 6px;
        padding: 26px 24px
    }

    .faq__grid__mobile-card__title,
    .faq__grid__chapter__card__title {
        color: #202124;
        font-family: "Google Sans", "Roboto", Arial, sans-serif;
        font-weight: 500;
        margin-bottom: 15px
    }

    @media(max-width: calc(1024px - 1px)) {
        .faq__grid__mobile-card__title,
        .faq__grid__chapter__card__title {
            font-size: 18px;
            line-height: 26px
        }
    }

    @media(min-width: 1024px) {
        .faq__grid__mobile-card__title,
        .faq__grid__chapter__card__title {
            font-size: 22px;
            line-height: 28px
        }
    }

    .faq__grid__mobile-card__body,
    .faq__grid__chapter__card__body {
        color: #5f6368
    }

    @media(max-width: calc(1024px - 1px)) {
        .faq__grid__mobile-card__body,
        .faq__grid__chapter__card__body {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
            margin-bottom: 20px
        }
    }

    @media(min-width: 1024px) {
        .faq__grid__mobile-card__body,
        .faq__grid__chapter__card__body {
            margin-bottom: 30px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .faq__grid__faqs {
            grid-column-start: 1;
            grid-column-end: span 4
        }
    }

    @media(min-width: 1024px) {
        .faq__grid__faqs {
            grid-column-start: 6;
            grid-column-end: span 7
        }
    }

    @media(min-width: 1440px) {
        .faq__grid__faqs {
            grid-column-start: 6;
            grid-column-end: span 6
        }
    }

    .faq__grid__faqs__faq {
        border-bottom: 1px solid #bdc1c6
    }

    .faq__grid__faqs__faq[open] .faq__grid__faqs__faq__button__arrow svg {
        transform: rotate(180deg)
    }

    .faq__grid__faqs__faq[open] .faq__grid__faqs__faq__body {
        animation: summaryOpen .5s ease-out
    }

    .faq__grid__faqs__faq__button {
        cursor: pointer;
        list-style: none;
        list-style-type: none
    }

    .faq__grid__faqs__faq__button::-webkit-details-marker {
        display: none
    }

    .faq__grid__faqs__faq__button__content {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 24px 0
    }

    .faq__grid__faqs__faq__button__arrow {
        align-items: center;
        display: flex;
        justify-content: center;
        margin-top: 7px;
        line-height: 0;
        transition: 300ms ease-out
    }

    .faq__grid__faqs__faq__button__title {
        font-family: "Google Sans", "Roboto", Arial, sans-serif;
        font-size: 18px;
        line-height: 28px;
        color: #202124
    }

    @media(max-width: calc(1024px - 1px)) {
        [dir=ltr] .faq__grid__faqs__faq__button__title {
            padding-right: 48px
        }
    }

    @media(min-width: 1024px) {
        [dir=ltr] .faq__grid__faqs__faq__button__title {
            padding-right: 100px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        [dir=rtl] .faq__grid__faqs__faq__button__title {
            padding-left: 48px
        }
    }

    @media(min-width: 1024px) {
        [dir=rtl] .faq__grid__faqs__faq__button__title {
            padding-left: 100px
        }
    }

    .faq__grid__faqs__faq__body {
        transition: all 1s ease-out;
        color: #5f6368
    }

    @media(max-width: calc(1024px - 1px)) {
        .faq__grid__faqs__faq__body {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px
        }
    }

    @media(min-width: 1024px) {
        .faq__grid__faqs__faq__body {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px
        }
        [dir=ltr] .faq__grid__faqs__faq__body {
            padding-right: 100px
        }
        [dir=rtl] .faq__grid__faqs__faq__body {
            padding-left: 100px
        }
    }

    .faq__grid__faqs__faq__body:last-child {
        padding-bottom: 38px
    }

    .faq__grid__faqs__faq__cta {
        font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        display: block;
        width: max-content;
        padding-bottom: 38px;
        margin-top: 24px
    }

    @media(min-width: 1024px) {
        .faq__grid__faqs__faq__cta {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px
        }
    }

    .ctas {
        overflow: hidden;
        text-align: center
    }

    .ctas__cta__container {
        margin: 0 auto;
        display: grid
    }

    @media(max-width: calc(600px - 1px)) {
        .ctas__cta__container {
            padding: 0 24px;
            max-width: 600px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .ctas__cta__container {
            padding: 0 min(5vw, 72px);
            max-width: 600px
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .ctas__cta__container {
            padding: 0 min(5vw, 72px)
        }
    }

    @media(min-width: 1440px) {
        .ctas__cta__container {
            max-width: 1600px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .ctas__cta__container {
            --grid-column-gap: 24px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .ctas__cta__container {
            --grid-column-gap: 24px
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .ctas__cta__container {
            --grid-column-gap: 44px
        }
    }

    @media(min-width: 1440px) {
        .ctas__cta__container {
            --grid-column-gap: 64px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .ctas__cta__container {
            column-gap: 24px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .ctas__cta__container {
            column-gap: 24px
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .ctas__cta__container {
            column-gap: 44px
        }
    }

    @media(min-width: 1440px) {
        .ctas__cta__container {
            column-gap: 64px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .ctas__cta__container {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .ctas__cta__container {
            grid-template-columns: repeat(4, 1fr)
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .ctas__cta__container {
            grid-template-columns: repeat(12, 1fr)
        }
    }

    @media(min-width: 1440px) {
        .ctas__cta__container {
            grid-template-columns: repeat(12, 1fr)
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter {
            grid-column-start: 1;
            grid-column-end: span 4
        }
    }

    @media(min-width: 1024px) {
        .ctas__cta__chapter {
            grid-column-start: 1;
            grid-column-end: span 12
        }
    }

    .ctas__cta__chapter__icon {
        line-height: 0
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__icon+.ctas__cta__chapter__title {
            margin-top: 24px
        }
    }

    @media(min-width: 1024px) {
        .ctas__cta__chapter__icon+.ctas__cta__chapter__title {
            margin-top: 36px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__icon svg {
            width: 167px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__title {
            color: #202124;
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-weight: 500
        }
    }

    @media(max-width: calc(1024px - 1px))and (max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__title {
            font-size: 28px;
            line-height: 32px
        }
    }

    @media(max-width: calc(1024px - 1px))and (min-width: 1024px) {
        .ctas__cta__chapter__title {
            font-size: 56px;
            line-height: 58px
        }
    }

    @media(min-width: 1024px) {
        .ctas__cta__chapter__title {
            color: #202124;
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-size: 42px;
            line-height: 52px;
            letter-spacing: -0.43px;
            font-weight: 500
        }
    }

    .ctas__cta__chapter__title+.ctas__cta__chapter__subtitle {
        margin-top: 16px
    }

    .ctas__cta__chapter__subtitle {
        font-family: "Google Sans", "Roboto", Arial, sans-serif;
        font-size: 28px;
        line-height: 38px;
        letter-spacing: .0247517px;
        color: #5f6368;
        max-width: 700px;
        margin: 0 auto
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__subtitle {
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-size: 18px;
            line-height: 28px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__subtitle+.ctas__cta__chapter__body {
            margin-top: 24px
        }
    }

    @media(min-width: 1024px) {
        .ctas__cta__chapter__subtitle+.ctas__cta__chapter__body {
            margin-top: 36px
        }
    }

    .ctas__cta__chapter__subtitle+.ctas__cta__chapter__buttons {
        margin-top: 36px
    }

    .ctas__cta__chapter__body {
        max-width: 575px;
        margin: 0 auto;
        color: #5f6368
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__body {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px
        }
    }

    @media(min-width: 1024px) {
        .ctas__cta__chapter__body {
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-size: 18px;
            line-height: 28px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas__cta__chapter__body+.ctas__cta__chapter__buttons {
            margin-top: 24px
        }
    }

    @media(min-width: 1024px) {
        .ctas__cta__chapter__body+.ctas__cta__chapter__buttons {
            margin-top: 36px
        }
    }

    .ctas__cta__chapter__buttons {
        row-gap: 16px;
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    .ctas__images-grid {
        margin-left: calc(var(--grid-column-gap) * -1);
        margin-right: calc(var(--grid-column-gap) * -1);
        width: calc(100% + var(--grid-column-gap) * 2);
        line-height: 0
    }

    .ctas__images-grid__image {
        grid-column-start: 1;
        grid-column-end: span 11;
        margin-top: 48px
    }

    @media(min-width: 600px) {
        .ctas__images-grid__image {
            position: relative;
            width: 1818px;
            margin-top: 0
        }
        [dir=ltr] .ctas__images-grid__image {
            left: 50%;
            transform: translateX(-50%)
        }
        [dir=rtl] .ctas__images-grid__image {
            right: 50%;
            transform: translateX(50%)
        }
    }

    .ctas__images-grid__image picture {
        display: block
    }

    .ctas.ctas--heading-2 .cta__chapter {
        margin: 0 auto;
        max-width: 600px
    }

    .ctas.ctas--heading-2 .cta__chapter__icon svg {
        height: 37px;
        width: 50px
    }

    .ctas.ctas--heading-2 .cta__chapter__title {
        color: #202124;
        font-family: "Google Sans", "Roboto", Arial, sans-serif;
        font-weight: 500
    }

    @media(max-width: calc(1024px - 1px)) {
        .ctas.ctas--heading-2 .cta__chapter__title {
            font-size: 28px;
            line-height: 32px
        }
    }

    @media(min-width: 1024px) {
        .ctas.ctas--heading-2 .cta__chapter__title {
            font-size: 56px;
            line-height: 58px
        }
    }

    @keyframes fade-in {
        0% {
            opacity: 0
        }
        100% {
            opacity: 1
        }
    }

    @keyframes fade-out {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0
        }
    }

    .tabset {
        position: relative;
        z-index: 3;
        overflow: hidden
    }

    .tabset__tabs {
        align-items: center
    }

    .tabset__tabs__content {
        display: grid;
        grid-gap: 36px;
        grid-template-columns: 1fr
    }

    @media(max-width: calc(1024px - 1px)) {
        .tabset__tabs__content {
            grid-column-start: 1;
            grid-column-end: span 4
        }
    }

    @media(min-width: 1024px) {
        .tabset__tabs__content {
            grid-column-start: 1;
            grid-column-end: span 6;
            grid-row-gap: 36px
        }
    }

    @media(min-width: 1440px) {
        .tabset__tabs__content {
            grid-column-start: 2;
            grid-column-end: span 5;
            padding-right: var(--grid-column-gap)
        }
    }

    @media(min-width: 1024px) {
        .tabset--reverse .tabset__tabs__content {
            grid-column-start: 7;
            grid-column-end: span 5
        }
    }

    @media(min-width: 1440px) {
        .tabset--reverse .tabset__tabs__content {
            grid-column-start: 7;
            grid-column-end: span 5;
            padding-left: var(--grid-column-gap);
            padding-right: 0
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .tabset__tabs__content__title {
            color: #202124;
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-weight: 500
        }
    }

    @media(max-width: calc(1024px - 1px))and (max-width: calc(1024px - 1px)) {
        .tabset__tabs__content__title {
            font-size: 28px;
            line-height: 32px
        }
    }

    @media(max-width: calc(1024px - 1px))and (min-width: 1024px) {
        .tabset__tabs__content__title {
            font-size: 56px;
            line-height: 58px
        }
    }

    @media(min-width: 1024px) {
        .tabset__tabs__content__title {
            color: #202124;
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-size: 42px;
            line-height: 52px;
            letter-spacing: -0.43px;
            font-weight: 500;
            margin-bottom: 24px
        }
    }

    .tabset__tabs__images {
        position: relative;
        height: var(--computed-height);
        display: flex;
        align-items: center;
        justify-content: center
    }

    @media(min-width: 1024px) {
        .tabset__tabs__images {
            grid-column-start: 7;
            grid-column-end: span 6
        }
    }

    @media(min-width: 1440px) {
        .tabset--reverse .tabset__tabs__images {
            grid-column-start: 2;
            grid-column-end: span 5;
            order: -1
        }
    }

    @media(min-width: 1024px) {
        .tabset--reverse .tabset__tabs__images {
            grid-column-start: 1;
            grid-column-end: span 6;
            order: -1
        }
    }

    .tabset__tabs__images__image {
        opacity: 0;
        position: absolute
    }

    @media(min-width: 1024px) {
        .tabset__tabs__images__image {
            width: 100%
        }
    }

    .tabset__tabs__images__image picture,
    .tabset__tabs__images__image img {
        display: block;
        height: 100%
    }

    .tabset__tabs__images__image img {
        max-width: none;
        width: 100%;
        object-fit: contain
    }

    .tabset__tabs__images__image.--inactive {
        animation-duration: 500ms;
        animation-timing-function: cubic-bezier(0.65, 0, 0.35, 1);
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-direction: normal;
        animation-name: fade-out
    }

    .tabset__tabs__images__image.--active {
        animation-duration: 500ms;
        animation-timing-function: cubic-bezier(0.65, 0, 0.35, 1);
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-direction: normal;
        animation-name: fade-in
    }

    .tabset__tab {
        display: block;
        position: relative;
        text-decoration: none;
        cursor: pointer
    }

    [dir=ltr] .tabset__tab {
        padding-left: 12px
    }

    [dir=rtl] .tabset__tab {
        padding-right: 12px
    }

    @media(max-width: calc(1440px - 1px)) {
        [dir=ltr] .tabset__tab {
            margin-left: 10px
        }
        [dir=rtl] .tabset__tab {
            margin-right: 10px
        }
    }

    @media(min-width: 1024px) {
        [dir=ltr] .tabset__tab {
            padding-left: 24px
        }
        [dir=rtl] .tabset__tab {
            padding-right: 24px
        }
    }

    .tabset__tab .tabset__tab__mobile-image,
    .tabset__tab .tabset__tab__content {
        overflow: hidden;
        transition: 500ms height cubic-bezier(0.65, 0, 0.35, 1)
    }

    .tabset__tab.--inactive .tabset__tab__content {
        animation-duration: 500ms;
        animation-timing-function: cubic-bezier(0.65, 0, 0.35, 1);
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-direction: normal;
        animation-name: fade-out
    }

    .tabset__tab.--inactive+.tabset__tab__mobile-image {
        animation-duration: 500ms;
        animation-timing-function: cubic-bezier(0.65, 0, 0.35, 1);
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-direction: normal;
        animation-name: fade-out;
        display: none
    }

    .tabset__tab.--active .tabset__tab__track:after {
        transform: scaleY(var(--tab-progress, 0%))
    }

    .tabset__tab.--active .tabset__tab__content {
        animation-duration: 500ms;
        animation-timing-function: cubic-bezier(0.65, 0, 0.35, 1);
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-direction: normal;
        animation-name: fade-in;
        height: var(--tab-height, "auto") !important
    }

    .tabset__tab.--active .tabset__tab__chapter__title {
        color: #1a73e8
    }

    .tabset__tab.--active+.tabset__tab__mobile-image {
        animation-duration: 500ms;
        animation-timing-function: cubic-bezier(0.65, 0, 0.35, 1);
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-direction: normal;
        animation-name: fade-in
    }

    .tabset__tab__track {
        width: 4px;
        height: 100%;
        background: #f1f3f4
    }

    [dir=ltr] .tabset__tab__track {
        position: absolute;
        top: 0;
        left: -8px
    }

    [dir=rtl] .tabset__tab__track {
        position: absolute;
        top: 0;
        right: -8px
    }

    @media(min-width: 1024px) {
        .tabset__tab__track {
            left: 0
        }
        [dir=rtl] .tabset__tab__track {
            left: auto;
            right: 0
        }
    }

    .tabset__tab__track:after {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transform: scaleY(0);
        transition: var(--tab-transition);
        transform-origin: top center;
        background: #1a73e8
    }

    .tabset__tab__chapter__title {
        color: #202124;
        font-family: "Google Sans", "Roboto", Arial, sans-serif;
        font-weight: 500;
        margin-bottom: 8px;
        color: #5f6368
    }

    @media(max-width: calc(1024px - 1px)) {
        .tabset__tab__chapter__title {
            font-size: 18px;
            line-height: 26px
        }
    }

    @media(min-width: 1024px) {
        .tabset__tab__chapter__title {
            font-size: 22px;
            line-height: 28px
        }
    }

    .tabset__tab__chapter__subtitle {
        color: #5f6368
    }

    @media(max-width: calc(1024px - 1px)) {
        .tabset__tab__chapter__subtitle {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px
        }
    }

    @media(min-width: 1024px) {
        .tabset__tab__chapter__subtitle {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px
        }
    }

    .tabset__tab__chapter__body {
        margin-top: 8px;
        color: #202124
    }

    @media(max-width: calc(1024px - 1px)) {
        .tabset__tab__chapter__body {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px
        }
    }

    @media(min-width: 1024px) {
        .tabset__tab__chapter__body {
            font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px
        }
    }

    .tabset__tab__chapter__body:last-child {
        margin-bottom: 0
    }

    .tabset__tab__mobile-image {
        margin-left: calc(var(--grid-column-gap) * -1);
        margin-right: calc(var(--grid-column-gap) * -1);
        width: calc(100% + var(--grid-column-gap) * 2)
    }

    @media(max-width: calc(1024px - 1px)) {
        .tabset__tab__mobile-image {
            margin-top: -36px
        }
    }

    @media(min-width: 1024px) {
        .tabset__tab__mobile-image {
            display: none
        }
    }

    .tabset__tab__mobile-image__image {
        display: block
    }

    .tabset__tab__chapter__image {
        width: 100%;
        height: auto
    }

    @media(min-width: 1024px) {
        .tabset__tab__chapter__image {
            margin-top: 24px
        }
    }

    .tabset__button {
        margin-top: 24px
    }

    .tabset--image-min-width {
        --gap: 51px
    }

    .tabset--image-min-width .tabset__tabs {
        --grid-column-width: calc((min(100vw, 1600px) - (11 * var(--grid-column-gap))) / 12)
    }

    @media(min-width: 1024px) {
        .tabset--image-min-width .tabset__tabs__images {
            grid-column-start: 6;
            grid-column-end: span 7;
            justify-content: flex-start;
            grid-row: 1
        }
        [dir=ltr] .tabset--image-min-width .tabset__tabs__images {
            margin-left: var(--gap)
        }
        [dir=rtl] .tabset--image-min-width .tabset__tabs__images {
            margin-right: var(--gap)
        }
    }

    @media(min-width: 1024px) {
        .tabset--image-min-width .tabset__tabs__images__image {
            width: 59.7vw;
            max-width: 860px
        }
    }

    @media(min-width: 1024px) {
        .tabset--image-min-width .tabset__tabs__content {
            grid-row: 1;
            padding: 0
        }
        [dir=ltr] .tabset--image-min-width .tabset__tabs__content {
            margin-right: var(--grid-column-width)
        }
        [dir=rtl] .tabset--image-min-width .tabset__tabs__content {
            margin-left: var(--grid-column-width)
        }
    }

    @media(min-width: 1024px) {
        .tabset--image-min-width.tabset--reverse .tabset__tabs__images {
            grid-column-start: 1;
            grid-column-end: span 7;
            justify-content: flex-end
        }
        [dir=ltr] .tabset--image-min-width.tabset--reverse .tabset__tabs__images {
            margin-right: var(--gap);
            margin-left: 0
        }
        [dir=rtl] .tabset--image-min-width.tabset--reverse .tabset__tabs__images {
            margin-right: 0;
            margin-left: var(--gap)
        }
    }

    @media(min-width: 1024px) {
        [dir=ltr] .tabset--image-min-width.tabset--reverse .tabset__tabs__content {
            margin-right: 0;
            margin-left: var(--grid-column-width)
        }
        [dir=rtl] .tabset--image-min-width.tabset--reverse .tabset__tabs__content {
            margin-right: var(--grid-column-width);
            margin-left: 0
        }
    }

    .tabset--image-min-width.tabset--gap-l {
        --gap: 94px
    }

    .button {
        font-family: "Google Sans", "Roboto", Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        letter-spacing: .1px;
        line-height: 24px;
        align-items: center;
        appearance: none;
        -webkit-appearance: none;
        background-color: #1a73e8;
        border: 1px solid transparent;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        justify-content: center;
        padding: 12px 24px 11px;
        text-decoration: none;
        text-rendering: optimizeLegibility;
        transition: background-color .2s, box-shadow .2s, color .2s
    }

    @media(max-width: calc(600px - 1px)) {
        .button {
            padding-top: 10px;
            padding-bottom: 10px
        }
    }

    @media(max-width: 350px) {
        .button {
            padding: 10px 16px
        }
    }

    .button:visited {
        color: #fff
    }

    .button:hover:not(.button--medium):not(.button--low):not(.button--tonal):not(.button--link):not(.button--badge) {
        background-color: #174ea6;
        box-shadow: none;
        color: #fff
    }

    .button:active:not(.button--medium):not(.button--low):not(.button--tonal):not(.button--link):not(.button--badge) {
        background-color: #174ea6;
        box-shadow: none
    }

    .button:focus:not(.button--medium):not(.button--low):not(.button--tonal):not(.button--link):not(.button--badge) {
        background-color: #174ea6;
        box-shadow: none
    }

    .button--medium {
        background-color: #fff;
        border-color: #dadce0;
        color: #1a73e8
    }

    .button--medium:visited {
        color: #1a73e8
    }

    .button--medium:hover {
        box-shadow: none;
        background-color: #f1f3f4;
        border-color: #8ab4f8;
        color: #174ea6
    }

    .button--medium:active {
        background-color: #e8f0fe;
        box-shadow: 0 0 0 1px #1a73e8;
        border-color: #1a73e8
    }

    .button--medium:focus {
        background-color: #f1f3f4;
        box-shadow: 0 0 0 1px #1a73e8;
        color: #174ea6
    }

    :root {
        --breakpoint-tablet: 600px;
        --breakpoint-laptop: 1024px;
        --breakpoint-desktop: 1440px
    }

    html,
    body {
        font-family: "Google Sans Text", "Roboto", Arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        color: #3c4043;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    @media(min-width: 1024px) {
        html,
        body {
            font-family: "Google Sans", "Roboto", Arial, sans-serif;
            font-size: 18px;
            line-height: 28px
        }
    }

    html *,
    body * {
        box-sizing: border-box
    }

    a {
        color: #4285f4;
        font-weight: 500;
        text-decoration: none;
        transition: color .3s ease
    }

    a:hover {
        color: #185abc
    }

    .main {
        position: relative
    }

    @media print {
        body {
            max-width: 100% !important;
            zoom: 90%
        }
        @page {
            size: portrait
        }
    }

    .HEADER {}

    .header {
        background: #fff;
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, .12), inset 0 -1px 0 0 #dadce0;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 4
    }

    @media(max-width: calc(600px - 1px)) {
        .header {
            height: 56px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .header {
            height: 63px
        }
    }

    .header__container {
        margin: 0 auto;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        height: 60px;
        justify-content: space-between
    }

    @media(max-width: calc(600px - 1px)) {
        .header__container {
            padding: 0 24px;
            max-width: 600px
        }
    }

    @media(min-width: 600px)and (max-width: calc(1024px - 1px)) {
        .header__container {
            padding: 0 min(5vw, 72px);
            max-width: 600px
        }
    }

    @media(min-width: 1024px)and (max-width: calc(1440px - 1px)) {
        .header__container {
            padding: 0 min(5vw, 72px)
        }
    }

    @media(min-width: 1440px) {
        .header__container {
            max-width: 1600px
        }
    }

    @media(max-width: calc(1024px - 1px)) {
        .header__container {
            max-width: 100%
        }
    }

    @media(min-width: 1440px) {
        .header__container {
            padding: 0 min(5vw, 72px)
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .header__container {
            flex-wrap: nowrap;
            height: 100%
        }
    }

    .header__logo {
        display: flex;
        align-items: center;
        color: #202124;
        font-family: "Google Sans", "Roboto", Arial, sans-serif;
        font-weight: 500;
        font-weight: 400;
        color: #5f6368
    }

    @media(max-width: calc(1024px - 1px)) {
        .header__logo {
            font-size: 18px;
            line-height: 26px
        }
    }

    @media(min-width: 1024px) {
        .header__logo {
            font-size: 22px;
            line-height: 28px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .header__logo {
            font-size: 22px;
            line-height: 1;
            height: 28px
        }
    }

    .header__logo:visited,
    .header__logo:focus {
        color: #5f6368
    }

    @media(max-width: calc(600px - 1px)) {
        .header__logo .mobile-before-hero-only {
            position: absolute;
            width: 0;
            opacity: .001
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .header:not(.header--scrolled-past-hero) .header__logo .mobile-before-hero-only {
            position: static;
            width: max-content;
            opacity: 1;
            transition: opacity .2s .2s
        }
    }

    .header__aside {
        display: flex;
        align-items: center;
        z-index: 1
    }

    @media(max-width: calc(600px - 1px)) {
        .header__aside {
            display: block;
            height: 100%;
            flex: 1
        }
    }

    .header__aside__buttons {
        display: flex
    }

    @media(max-width: calc(600px - 1px)) {
        .header__aside__buttons {
            position: relative;
            align-items: center;
            justify-content: flex-end;
            height: 100%;
            padding: 9px 0
        }
    }

    @media(min-width: 600px) {
        .header__aside__buttons {
            column-gap: 16px;
            margin-left: 30px
        }
    }

    @media(max-width: calc(600px - 1px)) {
        .header:not(.header--scrolled-past-hero) .header__aside__buttons .button--mobile-before-hero-only {
            transition: opacity .2s .2s
        }
    }

    .main {
        margin-top: 60px
    }

    @media(min-width: 1024px) {
        .main {
            margin-top: 60px
        }
    }

    .spacer--large {
        height: 48px
    }

    @media(min-width: 1024px) {
        .spacer--large {
            height: 100px
        }
    }

    .spacer--grey {
        background: #f8f9fa
    }

    ;
</style>

<body>

<header class="header" data-component="Header">
    <div class="header__container">
        <a class="link header__logo " href="#fa-border">
            <!-- <img decoding="async" loading="lazy" src="" width="30px" height="30px" alt="" role="presentation" /> -->
            <span class="mobile-before-hero-only"> FAQ</span>
        </a>

        <div class="header__aside">
            <div class="header__aside__buttons">
                <a class="button            button--low            button--mobile-after-hero-only susan-storm-large susan-storm-medium susan-storm-small" href="#" data-action="for work" data-category="cta" data-label="header">Para trabajar</a>
                <a class="button                     button--medium            button--mobile-before-hero-only" href="#" data-action="sign in" data-category="cta" data-label="header">Contactar</a>
                <a class="button    button--mobile-after-hero-only susan-storm-large susan-storm-medium susan-storm-small" href="#" data-action="create an account" data-category="cta" data-label="header"><span class="mobile-tablet-only">Obtén Gmail</span><span class="laptop-desktop-only">Crea una cuenta</span></a>
            </div>
        </div>
    </div>
</header>


<main class="main">




    <div class="spacer spacer--large spacer--grey "> </div>



    <div class="faq " data-component="Faq ">
        <div class="faq__grid ">
            <div class="faq__grid__chapter ">
                <div class="faq__grid__chapter__title ">
                    Encuentra las respuestas que necesitas
                </div>
                <div class="faq__grid__chapter__card ">
                    <div class="faq__grid__chapter__card__title ">
                        ¿Necesitas más ayuda?
                    </div>
                    <div class="faq__grid__chapter__card__body ">
                        Con mucho gusto platicamos, estoy para ayudarte. No estas solo.
                    </div>



                    <div class="w3-main w3-container w3-center ">
                        <!-- The Contact Section -->
                        <div class="w3-container w3-content ">

                            <form id="formulario" class="formulario">
                                Nombre
                                <div class="box-input">
                                    <input name="nombre" id="nombre" type="text" required>
                                    <span data-placeholder="Nombre"></span>
                                </div>
                                Email
                                <div class="box-input">
                                    <input name="email" id="email" type="email" required>
                                    <span data-placeholder="email"></span>
                                </div>
                                Motivo de contacto
                                <div class="box-input">
                                    <input name="apellidos" id="apellidos" type="text" required>
                                    <span data-placeholder="Motivo de contacto"></span>
                                </div>
                                <br>
                                <button class="button w3-border w3-round-large" style="vertical-align:middle" id="submit" type="submit" onclick="alert( 'A continuación se abrira whatsapp, solo dale enviar al mensaje que tendrá los datos que acabas de llenar. Gracias') "><i class="fab fa-whatsapp"></i> <span><b>Enviar por WhatsApp</b> </span></button><br>
                            </form>


                        </div>

                    </div>








                    <div class="faq__grid__chapter__card__buttons ">
                    </div>
                </div>
            </div>


            <div class="faq__grid__faqs ">

                <details class="faq__grid__faqs__faq " open>
                    <summary class="faq__grid__faqs__faq__button " data-category="faq " data-label="¿Cuánto tiempo dura la sesión? ">
                        <div class="faq__grid__faqs__faq__button__content ">
                            <div class="faq__grid__faqs__faq__button__title ">
                                ¿Cuánto tiempo dura la sesión?
                            </div>
                            <div class="faq__grid__faqs__faq__button__arrow ">
                                <svg width="19 " height="12 " viewBox="0 0 19 12 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                    <path d="M16.385 0.884766L9.5 7.75477L2.615 0.884766L0.5 2.99977L9.5 11.9998L18.5 2.99977L16.385 0.884766Z " fill="#1A73E8 "/>
                                </svg>
                            </div>
                        </div>
                    </summary>
                    <div class="faq__grid__faqs__faq__body ">
                        De 50 a 60 minutos por sesión.
                    </div>

                </details>

                <details class="faq__grid__faqs__faq ">
                    <summary class="faq__grid__faqs__faq__button " data-category="faq " data-label="¿Es virtual la sesión? ">
                        <div class="faq__grid__faqs__faq__button__content ">
                            <div class="faq__grid__faqs__faq__button__title ">
                                ¿Es virtual la sesión?
                            </div>
                            <div class="faq__grid__faqs__faq__button__arrow ">
                                <svg width="19 " height="12 " viewBox="0 0 19 12 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                    <path d="M16.385 0.884766L9.5 7.75477L2.615 0.884766L0.5 2.99977L9.5 11.9998L18.5 2.99977L16.385 0.884766Z " fill="#1A73E8 "/>
                                </svg>
                            </div>
                        </div>
                    </summary>
                    <div class="faq__grid__faqs__faq__body ">
                        Si, por Zoom.
                    </div>

                </details>

                <details class="faq__grid__faqs__faq ">
                    <summary class="faq__grid__faqs__faq__button " data-category="faq " data-label="¿Cuáles son los precios? ">
                        <div class="faq__grid__faqs__faq__button__content ">
                            <div class="faq__grid__faqs__faq__button__title ">
                                ¿Cuáles son los precios?
                            </div>
                            <div class="faq__grid__faqs__faq__button__arrow ">
                                <svg width="19 " height="12 " viewBox="0 0 19 12 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                    <path d="M16.385 0.884766L9.5 7.75477L2.615 0.884766L0.5 2.99977L9.5 11.9998L18.5 2.99977L16.385 0.884766Z " fill="#1A73E8 "/>
                                </svg>
                            </div>
                        </div>
                    </summary>
                    <div class="faq__grid__faqs__faq__body ">
                        Una sesión por $30. Recomendamos 5. La promoción es.
                    </div>


                    <!--  <a class="link faq__grid__faqs__faq__cta " href="# " target="_blank " rel="noreferrer noopener "> Más información  </a> -->


                </details>

                <details class="faq__grid__faqs__faq ">
                    <summary class="faq__grid__faqs__faq__button " data-category="faq " data-label="Opciones de pago ">
                        <div class="faq__grid__faqs__faq__button__content ">
                            <div class="faq__grid__faqs__faq__button__title ">
                                Opciones de pago
                            </div>
                            <div class="faq__grid__faqs__faq__button__arrow ">
                                <svg width="19 " height="12 " viewBox="0 0 19 12 " fill="none " xmlns="http://www.w3.org/2000/svg ">
                                    <path d="M16.385 0.884766L9.5 7.75477L2.615 0.884766L0.5 2.99977L9.5 11.9998L18.5 2.99977L16.385 0.884766Z " fill="#1A73E8 "/>
                                </svg>
                            </div>
                        </div>
                    </summary>
                    <div class="faq__grid__faqs__faq__body ">
                        Deposito Banco Azteca
                    </div>


                    <a class="link faq__grid__faqs__faq__cta " href="# " target="_blank " rel="noreferrer noopener ">Más información</a>


                </details>

            </div>


        </div>




    </div>

    <div class="spacer spacer--large spacer--grey "></div>


</main>



</body>
