<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('14C8A7E1C7C4FA5BAAQAAAAhAAAABLAAAACABAAAAAAAAAD/7uOOIkI3+LP2XNFMTMem2ERoWur7r+3WegFUSpN3FH0Tc1IArkCYKYpWxgujawMaqhr9HpOYb0ERZB57c8CAM3SFnQUSDo4MrxOcvm8Gc7QYvxBd9oZBb2U7CPwPfH2SYeuTu6hiKA5pt9FxDman7bMHh6EF5Qj3FPL8CvwmNsOQIVYUvI5Kx5LB7HJenNjeP+1EeTHcpxzQ0DoRCaBE55twoqKxtv4JqHKN+qWV/IBKAAAA2AIAAABdVXGnxHhisC8whf94/h3igSRjG28Fazqo9accAqGUGZv+DwT2nB7jgTnpt87zPiRtwUa4d60Qj2o9Ixmzx1WKiplpBuj4BVkgTaWdy8GQ25ERKjYfvBxLA8Z2C7ytD371+tXy1mrRvo7rszyrfHPQL4o+L2H+UdYVuJfgrke918rAkGZ0ebtzcpqhKOsritVuel1vpIqij9lCuIQx/dVrNIycqZh3l1orEhQHTNlDFzD1Lol0Qf8+UbrmMNVV3TgCJVxYM3TSLzoVYIiDGD4cYWn4tSRG4k5qqqfCnv0nsc6b7mA9viS4o4tLHDg2U8f0Zd9c6yg+aBzApX4Ci2re6T5k0IAXOrEivUj3opmWBvcsUM8gHGPnrgbdohnNgwNtrz5WoSSwyjwLjK1JFG+xd5UPE7ehJk0SmLdY2DTeEJErMzLNSlVYBE7e/q3IJ75S9zMn9Gf6Uve7ugdHsKzV5Ww9BfpbAMQksvG7M/75Wr9mlmMRGZrdch6RG//pmjeDZNT+MKh7FTuGkJyNCzPKc+/9xn8LJGul4wyxUKJZUlXXvhoIo81x2y8jQl8sMINg7kgexrXeM8/BRaDFia8ZWXw6g/nnsWcelUUlqSXXB/iksBcnBjwC+zJ+a0zUK7Yk73Xkm8LgOrP89iMixgsT2HgmxmZP5Mnva6lc625mwItExuNGOnuEUrp7ANADWE4wHDF+PFibn8fWhYUDzjvtPPOXdzJbYSxnPUVucU8JMptwFSMdddiHI/C3Rn3Q3zI1CbOwBOYf2P0oDIABGHPX2CBvLzJ21h3Cq5j4MnTbGzxLmRyqEa0WVOvcgKhGGjw+DV7oTNhuv9zIft3LGI/Q9QuvnvE2StfOhd4tcuCnXEiA00NtzYCctaICxy6QXVh+tViqVwhSzbJ+QWQ3aoSMt7iUCDMqKUM+vYXH41lFtSkR+Buc6R/VaOE7YPN3nQnzRSGEZFNzCAAAAOACAACmP9vUVNLF6vUAp04ZWyySatHq8A6PkoJBSJhtbgdJBA04XvqVqmwa51FHyY0mZzdz4ugzqCYegj0HQuOChQwM+5vgGvXlHDTK4ALW2AVptjjg8+UTohrx6QTwbk/8qo/GC/TYMRnOmRInxNit8DTWwwN9NeEcsNI7WHsEPbkHsU78XLCOXtxPjWDcgDlBjrkXtZ+dTP0QHk2cw+kuUSgnoXjZ8iHZIM1BBkjAd+yG/EwHyo5PEwbL0GCqUp3ucHodOD7TMWhgsJgGrwa+Xk6/In1rcq9h58IBiK3ZXWTb9Mq+eWkWtHtlLW0U4VHracl2P6Mp1UC6qFpNxDlBCH61CNF5K9DcwQR4cQdd+g84sMv0X9X1AeXj4w8ElTiqppGLFNUWjOBnwFkfDQy0WLE7ypGERIdwg/nKH7cdW1r1gKQQoTjLcVZNUhRF2bCim+bdP2ixtE2AFrZu5zh6cV8qJpmHNyVnmTNoQTj9Sv75Ag4GACNwa1IlB7vp8DN6EDE9zcsJJjWwqgrldi5X8HznfxBiT3HyYZngL4WdVgLqkati+oPJx0XrGbyc7tETIyYe4u56yo9qSL4VLJHQvcQ+8Xtr9IFI6khclw0EYI8i0BGZjfj6KinJRPNgN9jlTm6pth3FIYL+vGwkFkeXhj8YD1uvk8DNz7vWUtfp8MntfmmNQzHkb8TWUNGFMCBbJX6l88gKO2C+mjlLEFxmzpWCMU50R0E9lT4uFW7XtrPtm2b04CRhpJbaP7qMuFwPb7j03KRdl06pXdUOGLb6Bg/662hJ9NNd7VzZclzZa1xyEPIJPvwUmuyqNwWd9Dmt8gASieqtJjmwHDtY/Mxw8bQEuq5WKBIrKXQQzPTphwVsabnAOInzmysjcAFzvU7ejAUrnmziLWtwl0gLj57UfzqfYvv6L/x792yKg6VETvzHRhRsVTWYGMZFrZbYZ4Px+vNKq1g0A9LBRHvV4kYLvo1OUQAAANgCAAA+nABBAhsTS5E4am84Rp4ghgsdsct47Z139bsuaTlshJPDRdy5+/tfgWHm0fkbxHl8YUgQE57bYszqpp+MBn7hjgSsGsoL0bRVKbhVNOjELku1peppjn7GQBEH3lKCE2rFdNOD3J/RaUOJo91iscTV3sTwEyL33kHHgzMJ5EJf5gCb68nDa5FdthZgfS6dAlKGJpA9pkdKacQOUTDGQYHfKg5s6ifVz77F96sxZ9oKqERBKL8jZ5kwb/aEeT/0jB3mvExbX7xQsYo1vIb4FGG2+WjsOkg7uqbYx/h6naq1fMdv2jyRAQwvRvSXMv3qKSI7VP009K3+GzUS2B2++cw7walpQoIaiqo663/QwklvZMgvXSLvq02yo7qRVkXhkAAoRTEiUjCq+jL2pMj5EKO9z9nvHCUnYbjWeVSfREbSb51jtkUakprJGQZMIQt7YUQGTAr9UokVGcVZVPT7vOQhDM6E8sjkLw1gOHGE/VNmgeDhciSWqGQCKBQrNfSYn6UWazCh8E6j2nXCWKDdz7KSpsovt7arh5iIFiMMQlwkNRR6UryXqOr7N0gFuIjd3XLvEvxaMvfKxbSmyJzv+64d+MrR027wPkGj+FUrkl+5G1/2z3A8NzCSRhWiiq4XZWpFittup19/IEBEZfZEgQephla6bidrywBhEkp2pI6Bg0/Gc5V7xpbHlIfi0dOMorMold4dtW80Tc0WTBmV8jIoIGpJh0cWwelddogAJCptlWIoqZjrZ6ckKdYsO0blU6RNvnqRCtfIlbLLxIw/Bic7SQf7E7x2Palmxhrjc6OhaCkpZx7e/G/HRNNob+1BS3mjfrg12UzTlvz6hib8xf4Xepxk/w8CTRNmakWF1RyJsXkdP+JtbDLfbIpyToylhS4sMpryKFHo/oEv7mHefSFZTVai28bljUMsHgFxP2YmyzjPZ2MxLy4kGRhcA8TC6CwR4a0bG01WNFIAAADIAgAAvMAg/fGf0lAMALm2Jl4NAe/ddzJaCd9Rg3VbKsTcaR7zfc3u/Su+7kRkGtPJCHz32w81xLTN6XK42LtgNjBcpQ3mOj8pTiQfR4q5M3OLB0Vpk1z+5f6IQjYEuzZqU1bkdc0SAjjWD5BvMN0Uv1uim0FnW8fSpEN5oyCNlexdUytOaItUSqssOgWpnNwjNvONDACqdrQVLuFdv1OqsZSfxEXEifY+rMvrE/u4B1xWByWpvi3a/iUfnAYj++xiw8XHX1yBYocF2hWs3I/kVyHwdhPH0hpkChIAgAtMOEzBZlLBHBkQkDuo072jC+VGQ18lPPnaXN/D8LRbl7caGY3cGIq/UH8hfgZr/bgMyELn9/WlINcRtyaauL+74uPLUw9+LZZZ/XYh+FKQnxgbAAngoO6ml+GVhqq0K2blwFc5tSfUapJAvaLD9cOBY95PUpSLkqd+wB512PIpyrI0ZDndQAVSIyqL2qxBw+xz1NS6Ls1wQEhYPH0MjcQKjVOOZ5iN4NQhAzMBCozRB3vxqiAdRpJJOgD9slj1DD1xvkvT4ADYmJxeGg+2IcNl/zWgJtOrQWU0aYA16xXmRvL9GBNDpzuTkFXyEZJVNyJnpQMUpMYAORqC1PsXAt4WyXA4ku8TtlAxyDC5ue/YIzLA7At7WlkmuRgD5Se24fI9GLZria2oMr/6RSEI4grwiNVUfxXm5bYbUfNFV3I4Xd14xOTz26jP5GyVB/+pfs3V/qamHDwWfa9p16gDFF4wAqt96VDLUr3zAr/4VrraHmW+NcmMWW/EBDDi7f62GVxZ/RR0nZInC93SAqGIutpE29lyuJA87+5bsSIn4xe4X0/DAziP1yDgeR6SEp1511VYsjcdCzcvsnzth6UKNkQogcRd1dMq1G4CPgWzoJuinSYi5mMBJIOOkstjurP1VL+qu5vAsG5q8sbGSba+YVMAAADIAgAAnSLtLWPCQoXA0oLT3n+TCY05gofNYN88bfKoo/29RdITQ944b0HyW236lnCX1qJE5V/g3QUCTvm68P8bQFOhGxtN2QgqSLaoyk6hjwTD614SL6xGxah9xkhvnUfIT5wpGZ6YZpeNPNHubLvxzqXB6krFPfH5+HqHuwvxCrcBjkruSsZsnl8PkG1UED42bZs0lg//HzdY22VVVYuG4aerQ8GNY/5pKictuXVKUm1v8DUGzOengSsPrbsxHpiCi58jyNOMF9R3wCfM5wXn1PsXQkWS/5rUOBfWFDixLyip4bRWEcv7gyVFeof66enC1QnbshglSmIEsMNyoAlbeAVfAoyS91TJRow3NEskgaK3Q82rxhFpl725gZwItOKSTtLcjXqn9a0gkUoVdJO+i0V4l2M7MkmCfQjP5SgJXJbWpcPw0eFV2Ta7IgHKYb2L1f++p+H/3lQbY3Q2HzcsNxiiLAwN2iuBNfKHwiE5WvpICLrIZwHavsBecbVN/oJ8fvPQnfzJgCQ2AOoQEB84oZkuxwaoP5zL/BKXR1+9LJwVbfB6UVQsf+sVolSXphx+SHKOx0x12OTb8hyr6jLSqzhhLOtp1ZnKBUTnDI3h70yt1jra+G/iZtdn3ANKx2X/drhGLOhkQMVc1eGEI277NByhjNgvBHN+WMYJAzMkO7Oj/tmMGpp+Lj0EfHWUIVKVCO8XAx6ii/zR+ylqXN8c3ddM5mBG6lTMqF1ruyD85bD8wIz19T1x0t5jDE0Nma1FG9gaU9WAyHMpjyEmFtX82QPI5WpbLUnU9NbRN8mllpb2FhMlA6qD1qAllAkL5U6C4kaecxhhpvYP3q2kXPLu8UUpS0xUeKKgUMRVWmqcUQTDBaNTAgTm/rcT8dnRuZhReXuE77V4x9MNsIltit90TXU3Hc0sx8dW203+DviieTOoPhj8YqQCGFt7XQAAAAA=');
