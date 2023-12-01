<svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <!-- Círculo de fondo más grande -->
    <circle cx="100" cy="100" r="100" fill="#ccc"/>

    <!-- Imagen dentro del círculo -->
    <image href="https://play-lh.googleusercontent.com/qjAjwnQg3ah8r6ByapkIjKnp1Rr4jh-gEnLXu8Omuyku9eAovV3C6cfrniTKoEzSEA" x="0" y="0" width="200" height="200" clip-path="url(#circle-clip)"/>

    <!-- Clip path para dar forma de círculo -->
    <defs>
        <clipPath id="circle-clip">
            <circle cx="100" cy="100" r="100"/>
        </clipPath>
    </defs>
</svg>
