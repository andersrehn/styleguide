@extends('layout.master')

@section('content')
    @markdown
        #List
        Ordered or unordered lists. Note: Due to reserverd keywords, this internally is called "listing" and not "list". 
    @endmarkdown

    @doc(['slug' => 'listing'])

        @listing([
            'list' => [
                ['label' => 'List item 1'],
                ['label' => 'List item 2'],
                ['href' => 'https://google.se', 'label' => 'Linked list item'],
                [
                    'href' => 'https://google.se', 
                    'label' => 'Hey, i have kiddos!',
                    'childrenElementType' => "ul",
                    'children' => [
                        [
                            'href' => 'https://google.se', 
                            'label' => 'Linked list item',
                        ],
                        [
                            'label' => 'List item A',
                        ],
                        [
                            'label' => 'List item',
                        ],
                        [
                            'label' => 'Here you go, a list in a list in a list',
                            'children' => [
                                ['label' => 'Linked list item'],
                                ['label' => 'Linked list item'],
                                ['label' => 'Linked list item'],
                                ['label' => 'Linked list item'],
                                ['label' => 'Linked list item'],
                            ]
                        ]
                    ]
                ],
            ],
            'elementType' => "ol"
        ])
        @endlisting

    @enddoc
@stop



        