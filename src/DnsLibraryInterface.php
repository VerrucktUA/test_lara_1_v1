<?php

namespace DnsLibrary;

interface DnsLibraryInterface
{
    public function getDnsRecords(string $domain): array;
}
