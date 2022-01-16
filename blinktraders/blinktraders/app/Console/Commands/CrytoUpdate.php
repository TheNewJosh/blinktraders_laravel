<?php

namespace App\Console\Commands;

use App\Models\PaymentGateway;
use Illuminate\Console\Command;

class CrytoUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cryto:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Cryto information in the payment_gateways table in database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.coinranking.com/v2/coins',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'x-access-token: coinranking45d580c8a5b9b181bec5f7823e45aab30c094ad9bfbbfb35'
        ),
        ));

        $response = curl_exec($curl);
        $responsej = json_decode($response);
            
        $err = curl_error($curl);

        curl_close($curl);
            
        if($err){

            return 0;

        }else{
            foreach($responsej->data->coins as $coins){
                $pgw = PaymentGateway::where('uuid', $coins->uuid)->update([
                    'price' => $coins->price,
                    'change' => $coins->change,
                    'market_cap' => $coins->marketCap,
                    'btc_price' => $coins->btcPrice,
                ]);

                if($pgw){
                    echo "updated";
                }
            }
            return 0;
        }
    }
}
