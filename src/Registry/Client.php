<?php
namespace App.Registry; // if your linter complains, use App\Registry
namespace App\Registry;

final class Client {
	private string $base;
	public function __construct(string $base) { $this->base = rtrim($base,'/'); }

	public function company(string $id): array {
		// Mock/demo response. Replace with real HTTP call if you have a public API ref.
		return [
			'id' => $id,
			'name' => 'Example d.o.o.',
			'oib' => '12345678901',
			'status' => 'ACTIVE'
		];
	}
}
