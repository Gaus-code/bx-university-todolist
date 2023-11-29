<?php
function createToDo(string $title): array
{
	return [
		'id' => uniqid('', true),
		'title' => $title,
		'completed' => false,
		'created_at' => time(),
		'updated_at' => null,
		'completed_at' => null,
	];
}

class Todo
{
	private string $id;

	private string $title;

	private bool $completed=false;

	private int $createdAt;

	private ?int $updatedAt=null;

	private ?int $completedAt=null;
	public function __construct(string $title)
	{
		$this->id = uniqid('', true);
		$this->setTitle($title);
		$this->createdAt = time();
	}
	public function done()
	{
		$now = time();
		$this->completed = true;
		$this->completedAt = $now;
		$this->updatedAt = $now;
	}
	public function undone()
	{
		$this->completed = false;
		$this->completedAt = null;
		$this->updatedAt = null;
	}
	public function isCompleted(): bool
	{
		return $this->completed;
	}
	public function getId(): string
	{
		return $this->id;
	}

	public function getTitle(): string
	{
		return $this->title;
	}

	public function setTitle(string $title): void
	{
		$title = trim($title);
		if (strlen($title) === 0)
		{
			throw new Exception("Title cannon be empty");
		}
		$this->title = $title;
	}
	public function getCreatedAt(): int
	{
		return $this->createdAt;
	}

	public function getUpdatedAt(): ?int
	{
		return $this->updatedAt;
	}

	public function getCompletedAt(): ?int
	{
		return $this->completedAt;
	}
}

$todo = new Todo("hello world");

$todo->done();
var_dump('DONE!!!', $todo);
$todo->undone();
var_dump('UNDONE!!!', $todo);