<p class="monofont">{{ $name }} &gt;
    [ <?php
        $items = [];
        foreach (config('portfolio.' . $key) as $item) {
            $items[] = "<a href='{$item['url']}' data-toggle='tooltip' title='{$item['info']}'>{$item['name']}</a>";
        }
        echo join(', ', $items);
    ?> ]
</p>
