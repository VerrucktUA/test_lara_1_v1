<?php

namespace DnsLibrary\Tests;

use DnsLibrary\DnsLibrary;
use PHPUnit\Framework\TestCase;

class DnsLibraryTest extends TestCase
{
    public function testGetDnsRecords()
    {
        $dnsLibrary = new DnsLibrary();

        $domain = 'gmail.com';
        $records = $dnsLibrary->getDnsRecords($domain);

        $this->assertIsArray($records);
        $this->assertNotEmpty($records);

        var_dump($records);
    }
}
