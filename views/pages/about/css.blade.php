@extends('layout.master')

@section('content')
<article>

    @markdown

        #CSS
        The styleguide rest on the ITCSS structure, with some exceptions for simplification purposes. 

        ##What is ITCSS?

        ITCSS stands for Inverted Triangle CSS and it helps you to organize your project CSS files in such way that you can better deal with (not always easy-to-deal with) CSS specifics like global namespace, cascade and selectors specificity.

        ITCSS can be used with preprocessors or without them and is compatible with CSS methodologies like BEM, SMACSS or OOCSS.

        One of the key principles of ITCSS is that it separates your CSS codebase to several sections (called layers), which take form of the inverted triangle:


    @endmarkdown

    <div style="max-width: 400px;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 731.69 437.51"><title>itcss-layers2</title><polygon points="252.6 434.51 2.6 1.5 502.6 1.5 252.6 434.51" style="fill:#fff;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/><line x1="37.82" y1="62.5" x2="467.38" y2="62.5" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/><line x1="73.46" y1="125" x2="431.29" y2="125" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/><line x1="109.99" y1="187.51" x2="395.21" y2="187.51" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/><line x1="146.07" y1="250.01" x2="359.12" y2="250.01" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/><line x1="182.16" y1="312.51" x2="323.04" y2="312.51" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/><line x1="217.43" y1="375.01" x2="286.95" y2="375.01" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px"/><line x1="310.6" y1="88.5" x2="310.6" y2="89.17" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:2px"/><line x1="467.38" y1="62.5" x2="473.38" y2="62.5" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="485.39" y1="62.5" x2="719.68" y2="62.5" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:12.01486587524414,12.01486587524414"/><line x1="725.69" y1="62.5" x2="731.69" y2="62.5" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="431.29" y1="125" x2="437.29" y2="125" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="449.64" y1="125" x2="715.09" y2="125" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:12.346588134765625,12.346588134765625"/><line x1="721.26" y1="125" x2="727.26" y2="125" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="395.21" y1="187.51" x2="401.21" y2="187.51" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="413.06" y1="187.51" x2="715.34" y2="187.51" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:11.853960990905762,11.853960990905762"/><line x1="721.26" y1="187.51" x2="727.26" y2="187.51" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="359.12" y1="250.01" x2="365.12" y2="250.01" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="377.4" y1="250.01" x2="715.12" y2="250.01" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:12.28077220916748,12.28077220916748"/><line x1="721.26" y1="250.01" x2="727.26" y2="250.01" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="323.04" y1="312.51" x2="329.04" y2="312.51" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="340.92" y1="312.51" x2="715.32" y2="312.51" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:11.88569164276123,11.88569164276123"/><line x1="721.26" y1="312.51" x2="727.26" y2="312.51" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="286.95" y1="375.01" x2="292.95" y2="375.01" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="305.19" y1="375.01" x2="715.15" y2="375.01" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:12.23752212524414,12.23752212524414"/><line x1="721.26" y1="375.01" x2="727.26" y2="375.01" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="252.6" y1="436.51" x2="258.6" y2="436.51" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="270.57" y1="436.51" x2="719.7" y2="436.51" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:11.976737976074219,11.976737976074219"/><line x1="725.69" y1="436.51" x2="731.69" y2="436.51" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="502.6" y1="1.5" x2="508.6" y2="1.5" style="fill:none;stroke:#000;stroke-miterlimit:10"/><line x1="521.11" y1="1.5" x2="715.01" y2="1.5" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-dasharray:12.509803771972656,12.509803771972656"/><line x1="721.26" y1="1.5" x2="727.26" y2="1.5" style="fill:none;stroke:#000;stroke-miterlimit:10"/><text transform="translate(578.89 413.97)" style="font-size:24px;font-family:OpenSans-Extrabold, Open Sans;font-weight:700">UTILITIES</text><text transform="translate(518.26 352.57)" style="font-size:24px;font-family:OpenSans-Extrabold, Open Sans;font-weight:700">COMPONENTS</text><text transform="translate(611.44 103.97)" style="font-size:24px;font-family:OpenSans-Extrabold, Open Sans;font-weight:700">TOOLS</text><text transform="translate(587.39 167.37)" style="font-size:24px;font-family:OpenSans-Extrabold, Open Sans;font-weight:700">GENERIC</text><text transform="translate(566.96 228.77)" style="font-size:24px;font-family:OpenSans-Extrabold, Open Sans;font-weight:700">ELEMENTS</text><text transform="translate(591.17 290.17)" style="font-size:24px;font-family:OpenSans-Extrabold, Open Sans;font-weight:700">OBJECTS</text><text transform="translate(579.28 44.57)" style="font-size:24px;font-family:OpenSans-Extrabold, Open Sans;font-weight:700">SETTINGS</text></svg>
    </div>

    @markdown

        ##Layer description

        - Settings – used with preprocessors and contain font, colors definitions, etc.
        - Tools – globally used mixins and functions. It’s important not to output any CSS in the first 2 layers.
        - Generic – reset and/or normalize styles, box-sizing definition, etc. This is the first layer which generates actual CSS.
        - Elements – styling for bare HTML elements (like H1, A, etc.). These come with default styling from the browser so we can redefine them here.
        - ~~Objects – class-based selectors which define undecorated design patterns, for example media object known from OOCSS~~
        - Components – specific UI components. This is where majority of our work takes place and our UI components are often composed of Objects and Components
        - Utilities – utilities and helper classes with ability to override anything which goes before in the triangle, eg. hide helper class

    @endmarkdown


</article>
@stop
