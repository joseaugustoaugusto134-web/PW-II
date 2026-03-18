<?php

namespace source\Models\Faq;

class Question {
private $id;
private $question;
private $answer;
private $type;

public function __construct(int $id = null, string $question = null, string $answer = null, int $type = null) {
$this->id = $id;
$this->question = $question;
$this->answer = $answer;
$this->type = $type;
}

public function getId(): ?int {
return $this->id;
}

public function setId(int $id): void {
$this->id = $id;
}

public function getQuestion(): ?string {
return $this->question;
}

public function setQuestion(string $name): void {
$this->question = $question;
}

public function getAnswer(): ?string {
return $this->name;
}

public function setAnswer(string $answer): void {
$this->answer = $answer;
}

public function getType(): ?int {
return $this->type;
}

public function setType(int $type = null): void {
$this->type = $type;
}

public function show(): void {
echo "FAQ {$this->id}
Categoria: {$this->type}
Pergunta: {$this->question}
Resposta: {$this->answer}";
}
}

