<?php
 goto FveKY; ViHkH: $temp = ''; goto S011a; S011a: $slash = chr(92); goto EDlin; EDlin: $temp .= "\xa\x3c\77\x70\150\x70\12\x2f\x2a\12\40\116\x61\x6d\141\40\x66\151\154\x65\x3a\40\101\160\160\134\110\164\164\x70\134\x43\x6f\156\164\162\157\154\x6c\x65\x72\x73{$slash}{$cname}\56\160\x68\160\12\40\x54\157\x6f\x6c\x73\40\72\40\114\141\162\x61\166\145\x6c\102\157\x74\12\40\x43\x72\145\x61\x74\x65\x64\40\102\171\40\x3a\x20\106\162\x65\x64\x64\x79\x20\x57\151\143\x61\x6b\x73\157\156\157\54\x20\115\56\x4b\157\x6d\12\x2a\x2f\12\156\141\155\145\163\x70\141\143\145\40\x41\160\x70\134\x48\164\x74\160\x5c\x43\157\x6e\x74\x72\x6f\154\154\145\162\x73\x3b\xa\12\165\163\x65\40\101\160\160" . $slash . "\x4d\x6f\x64\x65\154\163" . $slash . $model . "\x3b"; goto wYQgA; Ji7yW: $temp .= "\xa\x20\x20\x20\40\x20\x20\40\40{$simpan}\12\40\x20\40\40\x20\12\40\40\40\x20\40\40\40\40\x72\x65\x74\165\x72\156\40\x72\145\x64\151\162\145\x63\164\50\x29\55\x3e\162\x6f\165\x74\x65\50\x27{$tbname}\x2e\151\156\144\x65\170\x27\51\12\40\x20\x20\40\40\x20\40\x20\40\40\40\40\40\40\x20\40\40\40\40\x20\x20\40\40\40\40\55\x3e\167\151\x74\x68\50\x27\163\165\x63\143\145\x73\163\47\54\47{$objek}\x20\110\x61\x73\x20\102\x65\x65\x6e\40\165\160\144\141\164\145\144\x20\163\x75\x63\143\145\163\x73\146\165\x6c\x6c\171\x27\51\x3b\xa\x20\40\x20\40\x7d\xa\40\40\x20\40\x20\xa\x20\40\40\x20\xa\x20\x20\40\x20\x70\x75\x62\x6c\x69\143\x20\146\x75\156\143\x74\x69\x6f\x6e\x20\x64\x65\x73\x74\162\x6f\171\x28{$model}\40\x24{$objek}\51\x20\72\40\122\145\x64\151\x72\x65\143\x74\x52\x65\163\160\157\x6e\163\145\12\40\40\x20\40\x7b\xa\40\x20\40\x20\x20\x20\40\x20{$hapus}\40\x20\x20\40\xa\x20\x20\40\x20\40\x20\40\40\x72\x65\x74\165\x72\156\x20\x72\x65\x64\151\x72\145\x63\164\x28\51\x2d\76\162\157\x75\164\x65\50\47{$tbname}\x2e\151\x6e\x64\x65\x78\x27\x29\12\x20\40\40\40\40\40\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\x2d\76\x77\x69\164\x68\x28\47\x73\x75\143\143\x65\x73\163\47\x2c\x27{$objek}\40\x68\x61\x73\40\x62\x65\145\x6e\40\144\145\x6c\145\164\x65\144\x20\x73\165\143\143\145\163\x73\146\x75\x6c\x6c\171\x27\51\73\12\40\x20\x20\x20\x7d\12\x7d\12\12\40\40\40\x20\x20\12"; goto e8X2R; rUup0: $lib = new Inflector(); goto B_Tez; W16LB: $pk = getPrimaryKey($conn, $tbname); goto wu_Ix; B_Tez: $tbname = $_GET["\x74\141\142\154\145"]; goto GK2YK; e8X2R: echo printCode($temp); goto MLFwo; kGWZt: foreach ($fields as $field) { if ($field != $pk) { $temp .= "\40\x20\x20\40\x20\40\40\x20\x24" . $objek . "\x2d\x3e" . $field . "\x3d\x20\x24\x72\145\x71\165\x65\x73\164\55\x3e" . $field . "\73\12"; } } goto Ji7yW; cecpG: $simpan = "\44" . $objek . "\55\76\x73\x61\166\x65\x28\51\73"; goto u0Wvm; JHwcU: $total = getTotalFields($conn, $tbname); goto PoXyX; TpORL: foreach ($fields as $field) { if ($field != $pk) { $temp .= "\40\40\x20\40\40\40\40\x20\40\40\47" . $field . "\x27\40\75\x3e\x20\47\162\x65\x71\x75\151\162\145\x64\x27\54\xa"; } } goto uPtD7; UeApC: $model = $lib->singularize($classname) . "\x4d\157\144\x65\x6c"; goto MiS2P; PoXyX: $fields = getAllFieldName($conn, $dbname, $tbname); goto UeApC; E61e8: $temp .= "\12\x20\x20\40\x20\x20\x20\x20\x20\x5d\x29\73\12\x20\12\40\40\x20\40\40\x20\x20\40\44{$objek}\x20\75\40\x6e\x65\167\40{$model}\73\x20\xa"; goto nY7UI; NL7dt: foreach ($fields as $field) { if ($field != $pk) { $temp .= "\x20\x20\40\x20\x20\40\40\x20\x20\x20\x27" . $field . "\47\40\x3d\76\40\47\x72\x65\x71\165\x69\x72\145\x64\47\x2c\xa"; } } goto E61e8; nY7UI: foreach ($fields as $field) { if ($field != $pk) { $temp .= "\x20\x20\x20\40\x20\x20\x20\x20\44" . $objek . "\x2d\x3e" . $field . "\40\x3d\40\x24\x72\145\x71\165\145\163\x74\55\x3e" . $field . "\x3b\xa"; } } goto rAuIy; kK2_b: include "\155\x6f\144\163\x2e\x70\150\x70"; goto rUup0; MiS2P: $cname = $lib->singularize($classname) . "\103\x6f\156\x74\162\157\x6c\154\x65\162"; goto FMRv4; rAuIy: $temp .= "\12\x20\40\x20\x20\x20\x20\x20\x20{$simpan}\x20\40\40\x20\40\12\x20\x20\x20\40\40\x20\x20\40\162\x65\164\165\x72\156\40\162\x65\144\x69\162\x65\x63\x74\x28\51\x2d\x3e\x72\157\x75\x74\x65\50\47{$tbname}\56\151\156\144\x65\170\47\51\xa\x20\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\40\x20\55\76\167\151\164\x68\x28\47\x73\165\143\143\x65\163\x73\47\x2c\47{$objek}\x20\x68\141\163\x20\x62\145\145\x6e\40\x63\x72\145\x61\x74\x65\144\x20\x73\165\x63\143\145\163\x73\x66\x75\x6c\154\171\x2e\47\51\73\12\x20\40\x20\40\x7d\xa\x20\40\x20\x20\40\40\12\x20\x20\40\40\12\40\40\x20\x20\160\165\x62\x6c\x69\x63\x20\146\x75\x6e\143\164\x69\157\x6e\x20\163\x68\157\167\50{$model}\x20\44{$objek}\51\x20\72\40\166\151\145\167\12\40\x20\40\x20\x7b\xa\40\x20\40\x20\40\x20\40\x20\162\x65\164\x75\162\x6e\40\166\151\x65\x77\x28\47{$tbname}\56\163\150\157\x77\47\54\143\x6f\x6d\160\x61\143\x74\x28\x27{$objek}\47\x29\51\x3b\xa\x20\40\40\40\175\40\12\x20\40\40\40\40\40\xa\x20\40\x20\x20\xa\40\40\40\x20\160\x75\142\154\151\x63\40\146\x75\x6e\143\164\x69\x6f\156\x20\x65\x64\151\x74\x28{$model}\40\x24{$objek}\x29\40\x3a\40\166\x69\145\x77\xa\40\40\40\40\x7b\12\40\40\40\40\x20\x20\40\x20\x72\145\164\165\x72\156\x20\x76\151\145\167\x28\x27{$tbname}\56\x65\144\151\164\x27\54\143\157\155\160\141\x63\164\x28\x27{$objek}\x27\x29\51\x3b\xa\x20\x20\x20\x20\175\12\40\x20\40\x20\x20\12\40\x20\40\40\12\40\x20\40\40\160\165\142\154\151\x63\x20\146\165\156\x63\x74\151\x6f\x6e\40\165\160\x64\x61\x74\x65\x28\x52\145\x71\x75\x65\163\164\x20\x24\x72\145\x71\165\x65\x73\x74\x2c\x20\44\151\x64\x29\x20\72\x20\x52\x65\x64\151\x72\145\143\164\x52\145\163\160\x6f\x6e\x73\145\12\40\40\40\40\x7b\12\40\x20\x20\40\x20\x20\40\40\44\x72\145\161\x75\145\163\x74\55\x3e\166\141\x6c\x69\x64\141\x74\145\50\x5b\xa"; goto TpORL; FMRv4: $objek = $lib->singularize($tbname); goto cecpG; GK2YK: $classname = ucfirst($tbname); goto W16LB; u0Wvm: $hapus = "\x24" . $objek . "\x2d\x3e\144\x65\x6c\x65\x74\145\50\51\x3b"; goto ViHkH; uPtD7: $temp .= "\xa\40\x20\40\40\40\x20\x20\40\135\x29\73\12\x20\40\40\x20\40\x20\x20\x20\x20\12\40\40\x20\x20\x20\x20\x20\40\44{$objek}\x20\x3d\40{$model}\x3a\x3a\x66\151\156\144\x28\44\x69\144\51\73\40\12"; goto kGWZt; wu_Ix: $unik = getUnique($conn, $tbname); goto JHwcU; wYQgA: $temp .= "\xa\x75\x73\145\40\x49\x6c\x6c\165\155\x69\156\141\164\x65\134\110\164\x74\x70\134\x52\145\161\x75\x65\x73\x74\73\xa\x75\x73\145\40\111\x6c\154\165\x6d\151\156\141\x74\x65\x5c\x48\x74\x74\160\x5c\x52\x65\x64\x69\x72\145\x63\x74\x52\145\163\160\x6f\x6e\163\x65\73\12\165\163\x65\40\111\154\x6c\165\x6d\151\156\141\x74\x65\x5c\126\x69\x65\x77\x5c\x56\x69\x65\167\x3b\xa\12\12\x63\154\141\x73\163\x20{$cname}\40\x65\x78\164\145\x6e\x64\x73\40\103\157\x6e\x74\x72\x6f\154\x6c\145\x72\12\x7b\12\12\40\40\40\40\x20\160\165\x62\154\x69\143\40\146\x75\156\143\x74\x69\x6f\x6e\x20\151\x6e\x64\x65\x78\50\51\40\x3a\40\x76\151\x65\x77\xa\40\x20\x20\x20\x7b\12\x20\x20\x20\x20\40\x20\40\40\44\144\x61\164\141\133\47{$tbname}\47\135\40\x3d\x20{$model}\72\x3a\x6f\162\144\145\x72\102\171\x28\x27{$pk}\47\x2c\x27\144\x65\x73\x63\x27\51\55\76\x70\x61\147\151\156\x61\x74\x65\x28\x35\x29\x3b\x20\x20\x20\x20\12\40\40\40\x20\x20\x20\x20\x20\162\x65\x74\165\x72\x6e\x20\x76\151\x65\x77\x28\47{$tbname}\56\151\x6e\144\145\x78\47\x2c\x20\44\x64\x61\164\141\51\73\12\x20\40\x20\40\175\xa\xa\x20\x20\x20\40\x20\x20\xa\x20\x20\40\x20\12\40\40\x20\40\x70\165\142\x6c\x69\x63\40\x66\165\x6e\143\x74\151\x6f\156\40\x63\162\x65\x61\x74\x65\50\x29\40\x3a\40\x76\x69\145\167\12\x20\40\40\40\173\12\40\x20\x20\x20\40\x20\40\40\x72\145\x74\x75\162\x6e\40\x76\x69\145\x77\50\47{$tbname}\x2e\x63\x72\145\x61\x74\145\x27\x29\x3b\12\x20\40\40\x20\175\xa\40\40\x20\x20\x20\12\40\x20\40\40\xa\x20\x20\x20\x20\160\165\x62\154\x69\x63\40\146\165\156\143\164\x69\x6f\156\x20\163\x74\157\162\x65\50\122\145\161\x75\145\163\164\x20\44\162\x65\161\165\145\x73\x74\x29\40\72\x20\x52\x65\144\151\x72\145\x63\164\x52\145\x73\x70\157\156\x73\x65\12\40\40\x20\40\173\12\40\40\x20\x20\x20\x20\40\40\x24\162\145\x71\x75\x65\x73\164\x2d\76\166\x61\154\x69\144\x61\164\x65\x28\x5b\xa"; goto NL7dt; FveKY: include "\x66\165\x6e\143\164\x69\157\x6e\163\x2e\160\150\160"; goto kK2_b; MLFwo: ?>