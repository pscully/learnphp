namespace App;

class Invoice

{
    public $items = [];

    public function __construct($client)
    {
        $this->client = $client;
    }

    public static function generate($client)
    {
        $invoice = new Invoice($client);
        return $invoice;
    }

    public function addItem($item, $price)
    {
        $newItem = [
            'item' => $item,
            'price' => $price,
            'item_id' => count($this->items) + 1,
        ];
        array_push($this->items, $newItem);
    }

    public function deleteItem($id)
    {
        $filtered_array = array_filter($this->items, function ($item) use (
            $id
        ) {
            return $item['item_id'] !== $id;
        });

        return $filtered_array;
    }

    public function showItems()
    {
        return $this->items;
    }

    public function getTotal($adjusted)
    {
        $total = array_sum(array_column($adjusted, 'price'));

        setlocale(LC_MONETARY, 'en_US.UTF-8');

        $formatted = money_format('%.2n', $total / 100);
        $this->total = $total;
        $this->formattedTotal = $formatted;

        return "The total is " . $formatted;
    }

    public function finalize($adjusted)
    {
        $output = [
            "Client" => $this->client,
            "Items" => $adjusted,
            "Total" => $this->getTotal($adjusted),
        ];

        return $output;
    }
}

$invoice = Invoice::generate('Mobi Services');

$invoice->addItem("SEO Service", 50000);
$invoice->addItem("Website Design", 100000);
$invoice->addItem("Social Media Ads", 30000);
$adjusted = $invoice->deleteItem(2);

var_dump($invoice->finalize($adjusted));
