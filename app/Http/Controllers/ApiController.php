<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

class ApiController extends Controller
{
    		private $ch;
    		private $response = false;
    		private $url;
    		private $options;

    		public function __construct()
    		{
    			$this->url = 'dev.erectusthegame.com/api';
    			$this->options = [
    				CURLOPT_POSTFIELDS => [
    					'apikey' => ''
    				]
    			];
    		}
    		
    		public function request($request) {
    			$this->ch = curl_init($this->url . "/" . $request);

    			foreach ($this->options as $key => $val) {
    				curl_setopt($this->ch, $key, $val);
    			}

    			curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
    			
    			return $this->getResponse();
    		}
    		
    		public function getResponse()
    		{
    			 if ($this->response) {
    				 return $this->response;
    			 }

    			$response = curl_exec($this->ch);
    			$error    = curl_error($this->ch);
    			$errno    = curl_errno($this->ch);

    			if (is_resource($this->ch)) {
    				curl_close($this->ch);
    			}

    			if (0 !== $errno) {
    				throw new \RuntimeException($error, $errno);
    			}

    			return $this->response = $response;
    		}

			public function getUserByEmail($email) {
				try {
                        $email = urlencode($email);
                        $data = json_decode($this->request('get_user_by_email/' . $email), true);
                         return view('pages.player.list', compact('data'))->render();
                        

				} catch (\RuntimeException $ex) {
					die(sprintf('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
				}
			}

            public function getUsers() {
               try {

                    $data = json_decode($this->request('get_users'), true);
                    return view('pages.player.list', compact('data'))->render();
                } catch (\RuntimeException $ex) {
                    die(sprintf('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
                }
            }

            public function getBestPlayers() {
               try {
                    $data = json_decode($this->request('get_best_players'), true);
                    $response = [
                        'title' => 'Top 10 Players',
                        'view' => view('pages.player.list', compact('data'))->render()
                    ];
                    return json_encode($response);
                } catch (\RuntimeException $ex) {
                    die(sprintf('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
                }
            }
            public function getBestTeams() {
               try {                 
                    $data = json_decode($this->request('get_best_alliances'), true);
                    $response = [
                        'title' => 'Top 10 Teams',
                        'view' => view('pages.team.list', compact('data'))->render()
                    ];
                    return json_encode($response);
                } catch (\RuntimeException $ex) {
                    die(sprintf('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
                }
            }

            public function test() {
               try {                        
                    $data = json_decode($this->request('get_best_players'), true);
                    var_dump($data);
                } catch (\RuntimeException $ex) {
                    die(sprintf('Http error %s with code %d', $ex->getMessage(), $ex->getCode()));
                }
            }


}
