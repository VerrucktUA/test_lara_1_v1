<?php

namespace DnsLibrary;

class DnsLibrary
{
    public function getDnsRecords($domain)
    {
        $records = dns_get_record($domain, DNS_ANY);

        return $records;
    }
}