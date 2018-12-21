<?php namespace Json\Databucket; 
  
use Illuminate\Support\Facades\Redis;

trait CacheValidator
{
     public function makeCache($keys){
		return md5($keys);
	}

     public function isCacheExists($rKey){
		if(Redis::exists($rKey)) return true; else return false;
	}

    public function isCacheSet($key, $value){
        Redis::set($key, $value);
        return true;	 
	} 

    public function isCacheGet($key){
       return Redis::get($key);	 
	}

}
