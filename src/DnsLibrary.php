<?php

namespace DnsLibrary;

class DnsLibrary implements DnsLibraryInterface
{
    public function getDnsRecords(string $domain): array
    {
        return $dnsRecords;
    }
}
