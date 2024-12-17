<?php declare(strict_types=1);

class User
{
  public string $id;
  public string $name;

  public function __construct(string $id, string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
}


interface IUserRepository
{
  public function find_user(string $id): ?User;
  public function get_users(): array;
}


class UserRepository implements IUserRepository
{
  /**
   * @var User[]
   */
  private array $users;

  public function __construct()
  {
    $this->users = [
      new User("ABC-8DFS-KJ", "User #1"),
      new User("JKS-87FD-LS", "User #2")
    ];
  }

  /**
   * @param string $id 
   * @return User|null
   */
  public function find_user(string $id): ?User
  {
    $filtered = array_filter($this->users, fn($user) => $user->id == $id);
    return current($filtered) ?: null;
  }

  /**
   * @return User[]
   */
  public function get_users(): array
  {
    return $this->users;
  }
}

$repository = new UserRepository();
var_dump($repository->find_user("ABC-8DFS-KJ"));