<li>
    <a {{ 
        $attributes->merge([
            'class' => 'text-sm text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md transition-colors duration-200'
        ])
    }}>
        {{ $slot }}
    </a>
</li>





