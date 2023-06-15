<?php

namespace DnsLibrary;

class DnsLibrary
{
    public function getDnsRecords($domain)
    {
        return dns_get_record($domain);
    }
}
